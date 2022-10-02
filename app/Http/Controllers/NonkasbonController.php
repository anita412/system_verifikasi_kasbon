<?php

namespace App\Http\Controllers;

use App\Models\Nonkasbon;
use App\Http\Requests\StoreNonkasbonRequest;
use App\Http\Requests\UpdateNonkasbonRequest;
use App\Models\Kasbon;
use App\Models\Kurs;
use App\Models\Jenis;
use App\Models\Pph;
use App\Models\Unit;
use App\Models\Dvendor;
use App\Models\DCustomer;
use App\Models\DDinas;
use App\Models\DImpor;
use App\Models\DPajak;
use App\Models\Kelengkapan;
use App\Models\KodeKasbon;
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
        $cek = Kasbon::count();
        $tglmasuk = Carbon::now()->format('Y-m-d');
        $terakhir = Kasbon::query()->latest('id')->first();
        if ($cek == 0) {
            $urut = 100001;
            $nomer = 'KSB' . $thnBulan . '-' . $urut;
            $n0mer = 'D' . $urut;
        } else {
            $ambil = Kasbon::all()->last();
            $urut = (int)substr($ambil->nokasbon, -1) + 1;
            $nomer = 'KSB' . $thnBulan . '-' . $urut;
            $uru_t = (int)substr($ambil->nokasbon, -1) + 1;
            $n0mer = 'D' . $uru_t;
        }
        return view('nonkasbon.create', compact('title', 'nonkasbon','nomer', 'terakhir', 'kurs', 'jenis', 'tglmasuk', 'pph', 'dueDate', 'jamnow', 'n0mer', 'kodekasbon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNonkasbonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNonkasbonRequest $request)
    {
        request()->validate([
            // 'tglmasuk' => 'required',
            // 'tglptj' => 'required',
            // 'selisihptjakhir' => 'required',
            // 'novkbselisihptj' => 'required',
            // 'nilaiselisihptj' => 'required',
        ]);
        $id = $request->id;
        $nonkasbon = Nonkasbon::find($id);

        $now = Carbon::now();
        $thnBulan = $now->year . $now->month . $now->day;
        $cek = Kasbon::count();
        $terakhir = Kasbon::query()->latest('id')->first();
        if ($cek == 0) {
            $urut = 100001;
            $nomer = 'KSB' . $thnBulan . '-' . $urut;
            $n0mer = 'D' . $urut;
        } else {
            $ambil = Kasbon::all()->last();
            $urut = (int)substr($ambil->nokasbon, -1) + 1;
            $nomer = 'KSB' . $thnBulan . '-' . $urut;
            $uru_t = (int)substr($ambil->nokasbon, -1) + 1;
            $n0mer = 'D' . $uru_t;
        }

        $dueDate = now()->addDays(30);

        $nonkasbon = new nonkasbon;
        $nonkasbon->doksebelumnya = $request->doksebelumnya;
        $nonkasbon->tglmasuk = $kasbon->tglmasuk;
        $nonkasbon->jammasuk = $kasbon->jammasuk;
        $nonkasbon->user = $kasbon->user;
        $nonkasbon->user = $kasbon->username;
        $nonkasbon->nip = $kasbon->nip;
        $nonkasbon->unit = $kasbon->unit;
        $nonkasbon->kodekasbon = $kasbon->kodekasbon;
        $nonkasbon->jenis_nonkasbon  = $kasbon->jenis_nonkasbon;
        $nonkasbon->kurs = $kasbon->kurs;
        $nonkasbon->namavendor  = $kasbon->namavendor;
        $nonkasbon->noinvoice  = $kasbon->noinvoice;
        $nonkasbon->tujuanpembayaran = $kasbon->tujuanpembayaran;
        

        if ($nonkasbon->save()) {
            return redirect()->route('nonkasbon.index')
                ->with('success', 'Non Kasbon created successfully.');
        } else {
            return redirect()->route('nonkasbon.index')
                ->with('success', 'Product not created successfully.');
        }
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
    public function edit(Nonkasbon $nonkasbon)
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
