<?php

namespace App\Http\Controllers;

use App\Models\Nonkasbon;
use App\Http\Requests\UpdateNonkasbonRequest;
use App\Models\Kasbon;
use App\Models\Kurs;
use App\Models\Jenis;
use App\Models\Pph;
use App\Models\VerifikasiNonKasbon;
use App\Models\Unit;
use App\Models\Dvendor;
use App\Models\DCustomer;
use App\Models\DDinas;
use App\Models\DImpor;
use App\Models\DPajak;
use App\Models\Kelengkapan;
use App\Models\KodeKasbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;
use DateInterval;
use DateTime;

class NonkasbonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:nonkasbon-list|nonkasbon-create|nonkasbon-edit|nonkasbon-delete|nonkasbon-verifikasi', ['only' => ['index', 'show']]);
        $this->middleware('permission:nonkasbon-create', ['only' => ['create', 'store', 'store1']]);
        $this->middleware('permission:nonkasbon-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:nonkasbon-delete', ['only' => ['destroy']]);
        $this->middleware('permission:nonkasbon-verifikasi', ['only' => ['verifikasi']]);
    }
    public function index()
    {
        $title = 'Nonkasbon';
        $nonkasbon = Nonkasbon::all();
        return view('nonkasbon.index', compact('nonkasbon', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nonkasbon = Nonkasbon::all();
        $title = 'Nonkasbon';
        $dueDate = now()->addDays(30)->format('Y-m-d');
        $pph = Pph::all();
        $kurs = Kurs::all();
        $jenis = Jenis::all();
        $kodekasbon = KodeKasbon::all();
        $now = Carbon::now();
        $jamnow = Carbon::now()->format('H:i:s');;
        $thnBulan = Carbon::now()->format('Y-m-d');
        $cek = NonKasbon::count();
        $tglmasuk = Carbon::now()->format('Y-m-d');
        $terakhir = NonKasbon::query()->latest('id')->first();
        if ($cek == 0) {
            $urut = 100001;
            $nomer = 'NKB' . $thnBulan . '-' . $urut;
            $n0mer = 'D' . $urut;
        } else {
            $ambil = NonKasbon::all()->last();
            $urut = (int)substr($ambil->nokasbon, -1) + 1;
            $nomer = 'NKB' . $thnBulan . '-' . $urut;
            $uru_t = (int)substr($ambil->nokasbon, -1) + 1;
            $n0mer = 'D' . $uru_t;
        }
        return view('nonkasbon.create', compact('title', 'nonkasbon', 'nomer', 'terakhir', 'kurs', 'jenis', 'tglmasuk', 'pph', 'dueDate', 'jamnow', 'n0mer', 'kodekasbon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNonkasbonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            // 'tglmasuk' => 'required',
            // 'tglptj' => 'required',
            // 'selisihptjakhir' => 'required',
            // 'novkbselisihptj' => 'required',
            // 'nilaiselisihptj' => 'required',
        ]);
        DB::transaction(function () use ($request) {
            $id = $request->id;
            $nonkasbon = Nonkasbon::find($id);

            $now = Carbon::now();
            $thnBulan = $now->year . $now->month . $now->day;
            $cek = NonKasbon::count();

            if ($cek == 0) {
                $urut = 100001;
                $nomer = 'NKB' . $thnBulan . '-' . $urut;
                $terakhir = '0';
            } else {
                $ambil = NonKasbon::all()->last();
                $urut = (int)substr($ambil->no_nonkasbon, -1) + 1;
                $nomer = 'NKB' . $thnBulan . '-' . $urut;
                $uru_t = (int)substr($ambil->no_nonkasbon, -1) + 1;
                $terakhir = NonKasbon::query()->latest('id')->first();
            }

            $dueDate = now()->addDays(30);

            $nonkasbonID = NonKasbon::insertGetId([
                'no_nonkasbon' => $nomer,
                'id_user' => $request->id_user,
                'tglmasuk' => $request->tglmasuk,
                'jammasuk' => $request->jammasuk,
                'doksebelumnya' => $terakhir,
                'id_user' => Auth::user()->id,
                'id_unit' => Auth::user()->id_unit,
                'id_kodekasbon' => $request->id_kodekasbon,
                'id_jenis_nonkasbon' => $request->id_jenis,
                'id_kurs' => $request->id_kurs,
                'namavendor'  => $request->namavendor,
                'noinvoice'  => $request->noinvoice,
                'tujuanpembayaran' => $request->tujuanpembayaran
            ]);

            VerifikasiNonKasbon::insertGetId([
                'id_nonkasbon' => $nonkasbonID,
                'vnk_a_1' => 'Dalam Proses',
                'status' => 'Dalam Proses',
            ]);
        });

        return redirect()->route('nonkasbon.index')
            ->with('success', 'Non Kasbon created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nonkasbon  $nonkasbon
     * @return \Illuminate\Http\Response
     */
    public function show(Nonkasbon $nonkasbon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nonkasbon  $nonkasbon
     * @return \Illuminate\Http\Response
     */
    public function edit(Nonkasbon $nonkasbon, $id)
    {
        $nonkasbon = NonKasbon::find($id);
        $title = 'Non Kasbon';
        return view('nonkasbon.edit', compact('title', 'kasbon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNonkasbonRequest  $request
     * @param  \App\Models\Nonkasbon  $nonkasbon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNonkasbonRequest $request, Nonkasbon $nonkasbon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nonkasbon  $nonkasbon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nonkasbon $nonkasbon)
    {
        //
    }
}
