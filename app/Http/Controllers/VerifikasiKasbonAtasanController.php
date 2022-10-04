<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Kasbon;
use App\Models\Kurs;
use App\Models\Jenis;
use App\Models\Pph;
use App\Models\User;
use App\Models\Verifikator;
use App\Models\Dvendor;
use App\Models\DCustomer;
use App\Models\DDinas;
use App\Models\DImpor;
use App\Models\DPajak;
use App\Models\Kelengkapan;
use App\Models\Keterangan;
use App\Models\KeteranganKasbon;
use App\Models\Keterangan_detail;
use App\Models\KodeKasbon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikasiKasbonAtasanController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:vkb-atasan-list|vkb-atasan-create|vkb-atasan-edit|vkb-atasan-delete|vkb-atasan-kelengkapan', ['only' => ['index', 'store']]);
        $this->middleware('permission:vkb-atasan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:vkb-atasan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:vkb-atasan-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $kasbon = Kasbon::all();
        $title = 'Kasbon';
        return view('vkb-atasan.index', compact('kasbon', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Verifikator  $verifikator
     * @return \Illuminate\Http\Response
     */
    public function show(Verifikator $verifikator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Verifikator  $verifikator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kasbon = Kasbon::find($id);
        $kb = $kasbon->id;
        $kelengkapan = Kelengkapan::where('id_kasbon', $kb)->get();

        $kodekasbon = KodeKasbon::all();
        $pph = Pph::all();
        $kurs = Kurs::all();
        $jenis = Jenis::all();
        $user = User::all();
        $title = 'Detail';
        return view('verifikator.edit', compact('title', 'kasbon', 'pph', 'kurs', 'jenis', 'user', 'kodekasbon', 'kelengkapan'));
    }

    public function info($id)
    {
        $kasbon = Kasbon::find($id);
        $kb = $kasbon->id;
        $kelengkapan = Kelengkapan::where('id_kasbon', $kb)->get();

        $kodekasbon = KodeKasbon::all();
        $pph = Pph::all();
        $kurs = Kurs::all();
        $jenis = Jenis::all();
        $user = User::all();
        $title = 'Detail';
        return view('verifikator.edit-info', compact('title', 'kasbon', 'pph', 'kurs', 'jenis', 'user', 'kodekasbon', 'kelengkapan'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVerifikatorRequest  $request
     * @param  \App\Models\Verifikator  $verifikator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {

            $kasbon = Kasbon::find($id);
            if ($kasbon->verifikasikasbon->vkb_a_1 = $request->Input('status') == 'Terverifikasi') {
                $kasbon->verifikasikasbon->vkb = 'Dalam Proses';
                $kasbon->verifikasikasbon->status = 'Dalam Proses';
            } else {
                $kasbon->verifikasikasbon->vkb_a_1 = $request->Input('status');
            }
            $kasbon->verifikasikasbon->update([
                'vkb_a_1' => $request->Input('status'),
                'status' => $request->Input('status'),
                'id_vkb_a_1' => Auth::user()->id
            ]);

            Keterangankasbon::where('id_kasbon', $id)->delete();
            $data = $request->all();
            if ($request->kekurangan) {
                foreach ($data['kekurangan'] as $item => $value) {
                    $data2 = array(
                        'id_kasbon' => $id,
                        'keterangan' => $data['kekurangan'][$item],
                    );
                    Keterangankasbon::create($data2);
                }
            }
        });
        return redirect()->route('vkb-atasan.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verifikator  $verifikator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verifikator $verifikator)
    {
        //
    }

    public function cek_kasbon($id)
    {
        $kasbon = Kasbon::find($id);

        $title = 'Detail';

        return view('vkb-atasan.cek_kasbon', compact('title', 'kasbon'));
    }

    public function cek_kasbon_edit($id)
    {
        $kasbon = Kasbon::find($id);
        $detail = KeteranganKasbon::where('id_kasbon', $id)->get();

        $title = 'Detail';

        return view('vkb-atasan.cek_kasbon_edit', compact('title', 'kasbon', 'detail'));
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $kasbon = Kasbon::find($id);
        $now = Carbon::now();
        DB::transaction(function () use ($kasbon, $request, $id) {

            foreach ($request->kekurangan as $key => $kekurangan) {
                $data = new KeteranganKasbon();
                $data->id_kasbon = $id;
                $data->keterangan = $kekurangan;
                $data->save();
            }

            if ($kasbon->verifikasikasbon->vkb_a_1 = $request->Input('status') == 'Terverifikasi') {
                $kasbon->verifikasikasbon->vkb_a_1 = $request->Input('status');
                $kasbon->verifikasikasbon->vkb = 'Dalam Proses';
                $kasbon->verifikasikasbon->status = 'Dalam Proses';
            } else {
                $kasbon->verifikasikasbon->vkb_a_1 = $request->Input('status');
                $kasbon->verifikasikasbon->status = $request->Input('status');
            }

            $kasbon->verifikasikasbon->id_vkb_a_1 = Auth::user()->id;
            $kasbon->verifikasikasbon->save();
        });

        return redirect()->route('vkb-atasan.index')
            ->with('success', 'Kasbon berhasil diverifikasi');
    }
}
