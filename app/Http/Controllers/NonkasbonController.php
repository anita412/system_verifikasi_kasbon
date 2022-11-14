<?php

namespace App\Http\Controllers;

use App\Models\Nonkasbon;
use App\Http\Requests\UpdateNonkasbonRequest;
use App\Models\Kurs;
use App\Models\NamaVendor;
use App\Models\Jenis;
use App\Models\Pph;
use App\Models\VerifikasiNonKasbon;
use App\Models\KeteranganNonKasbon;
use App\Models\KodeKasbon;
use App\Models\DokumenNKD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
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
        $namavendor = NamaVendor::all();
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
        return view('nonkasbon.create', compact('title', 'nonkasbon', 'nomer', 'terakhir', 'kurs', 'jenis', 'tglmasuk', 'pph', 'dueDate', 'jamnow', 'n0mer', 'kodekasbon', 'namavendor'));
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
                $terakhir = 'NKB20221013-0';
            } else {
                $ambil = NonKasbon::all()->last();
                $urut = (int)substr($ambil->no_nonkasbon, -1) + 1;
                $nomer = 'NKB' . $thnBulan . '-' . $urut;
                $uru_t = (int)substr($ambil->no_nonkasbon, -1) + 1;
                $terakhirt = NonKasbon::query()->latest('id')->first();
                $terakhir = $terakhirt->no_nonkasbon;
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
                'kodekasbon' => $request->kodekasbon,
                'jenis' => $request->jenis,
                'id_kurs' => $request->kurs,
                'namavendor'  => $request->namavendor,
                'noinvoice'  => $request->noinvoice,
                'tujuanpembayaran' => $request->tujuanpembayaran,
                'created_at' => $now,
                'updated_at' =>  $now
            ]);

            VerifikasiNonKasbon::insertGetId([
                'id_nonkasbon' => $nonkasbonID,
                'vnk_a_1' => 'Dalam Proses',
                'status' => 'Dalam Proses',
                'created_at' => $now,
                'updated_at' =>  $now
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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nonkasbon  $nonkasbon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pph = Pph::all();
        $kurs = Kurs::all();
        $namavendor = NamaVendor::all();
        $jenis = Jenis::all();
        $kodekasbon = KodeKasbon::all();
        $nonkasbon = NonKasbon::find($id);
        $detail = KeteranganNonKasbon::where('id_nonkasbon', $id)->get();
        $title = 'Non Kasbon';
        return view('nonkasbon.edit', compact('title', 'nonkasbon', 'detail', 'pph', 'kurs', 'namavendor', 'jenis', 'kodekasbon'));
    }

    public function show($id)
    {

        $nonkasbon = nonkasbon::find($id);

        $title = 'Detail';
        return view('nonkasbon.show', compact('title', 'nonkasbon'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNonkasbonRequest  $request
     * @param  \App\Models\Nonkasbon  $nonkasbon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $jammasuk = Carbon::now()->format('H:i:s');;
            $tglmasuk = Carbon::now()->format('Y-m-d');
            $now = Carbon::now();
            $nonkasbon = Nonkasbon::find($id);
            $nonkasbon->update([
                'tglmasuk' => $tglmasuk,
                'jammasuk' => $jammasuk,
                'kodekasbon' => $request->kodekasbon,
                'jenis' => $request->jenis,
                'id_kurs' => $request->kurs,
                'namavendor'  => $request->namavendor,
                'noinvoice'  => $request->noinvoice,
                'tujuanpembayaran' => $request->tujuanpembayaran,
                'updated_at' =>  $now,
            ]);


            $idvnk = $nonkasbon->verifikasinonkasbon->id;
            $vnk = VerifikasinonKasbon::find($idvnk);
            $vnk->update([
                'vnk_a_1' => 'Dalam Proses',
                'status' => 'Dalam Proses',
                'updated_at' =>  $now
            ]);
        });
        return redirect()->route('nonkasbon.index')->with('success', 'Non Kasbon updated successfully');
    }

    public function generatePDF($id)
    {
        $nonkasbon = Nonkasbon::find($id);
        $detail = DokumenNKD::where('id_dnk', $nonkasbon->dokumennk->id)->get();
        return view('pdf.print-nonkasbon', compact('nonkasbon', 'detail'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nonkasbon  $nonkasbon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nonkasbon::find($id)->delete();
        return redirect()->route('nonkasbon.index')
            ->with('success', 'Nonkasbon deleted successfully');
    }
}
