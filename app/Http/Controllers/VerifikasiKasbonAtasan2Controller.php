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
use App\Models\MonitoringSP;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikasiKasbonAtasan2Controller extends Controller
{
    function __construct()
    {
        $this->middleware('permission:vkb-atasan-2-list|vkb-atasan-2-create|vkb-atasan-2-edit|vkb-atasan-2-delete|vkb-atasan-2-kelengkapan', ['only' => ['index', 'store']]);
        $this->middleware('permission:vkb-atasan-2-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:vkb-atasan-2-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:vkb-atasan-2-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $kasbon = Kasbon::all();
        $title = 'Kasbon';
        return view('vkb-atasan-2.index', compact('kasbon', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            $now = Carbon::now();
            $kasbon = Kasbon::find($id);

            $idketerangan = $kasbon->keterangankasbon->id;
            $keterangan = KeteranganKasbon::find($idketerangan);
            $keterangan->update([
                'keterangan' => $request->Input('keterangan'),
                'updated_at' => $now
            ]);


            if ($kasbon->verifikasikasbon->vkb_a_2 = $request->Input('status') == 'Revisi') {
                $kasbon->verifikasikasbon->vkb_a_2 = $request->Input('status');
                $kasbon->verifikasikasbon->status = 'Revisi';
            } else {
                $kasbon->verifikasikasbon->vkb_a_2 = $request->Input('status');
                $kasbon->verifikasikasbon->vkb_a_1 = $request->Input('status');
                $kasbon->verifikasikasbon->vkb = $request->Input('status');
                $kasbon->verifikasikasbon->status = $request->Input('status');
            }

            if ($request->Input('status') == 'Terverifikasi') {
                MonitoringSP::insertGetId([
                    'id_kasbon' => $id,
                    'ptj' => 'Belum',
                    'sp1' => 'Belum',
                    'sp2' => 'Belum',
                    'sp3' => 'Belum',
                    'mts' => 'Belum',
                    'pbsdm' => 'Belum',
                    'ptj' => 'Belum',
                    'tgl_sp1' => $kasbon->tgltempo->addDays(7),
                    // 'tgl_sp2' => $kasbon->tgltempo->addDays(21),
                    // 'tgl_sp3' => $kasbon->tgltempo->addDays(44),
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }

            $kasbon->verifikasikasbon->id_vkb_a_2 = Auth::user()->id;
            $kasbon->verifikasikasbon->update();
        });

        return redirect()->route('vkb-atasan-2.index')->with('success', 'User updated successfully');
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
        $kelengkapan = Kelengkapan::find($id);

        $title = 'Detail';

        return view('vkb-atasan-2.cek_kasbon', compact('title', 'kelengkapan'));
    }

    public function cek_kasbon_edit($id)
    {
        $kasbon = Kasbon::find($id);
        $detail = KeteranganKasbon::where('id_kasbon', $id)->get();
        $title = 'Detail';
        return view('vkb-atasan-2.cek_kasbon_edit', compact('title', 'kasbon', 'detail'));
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $kelengkapan = Kelengkapan::find($id);

        $cekdok = '1';

        DB::transaction(function () use ($kelengkapan, $request, $id) {

            $vendorID = Dvendor::insertGetId([
                'nokasbon' => $kelengkapan->kasbon->nokasbon,
                'dv_invoice' => $request->Input('dv_invoice'),
                'dv_kwitansi' => $request->Input('dv_kwitansi'),
                'dv_povendor' => $request->Input('dv_povendor'),
                'dv_sjnvendor' => $request->Input('dv_sjnvendor'),
                'dv_packcinglist' => $request->Input('dv_packinglist'),
                'dv_testreport' => $request->Input('dv_testreport'),
                'dv_bapp' => $request->Input('dv_bapp'),
                'dv_lppb' => $request->Input('dv_lppb'),
            ]);

            $customerID = DCustomer::insertGetId([
                'nokasbon' => $kelengkapan->kasbon->nokasbon,
                'dc_memointernal' => $request->Input('dc_memointernal'),
                'dc_spph' => $request->Input('dc_spph'),
                'dc_ko' => $request->Input('dc_ko'),
                'dc_loi' => $request->Input('dc_loi'),
                'dc_invoicecustom' => $request->Input('dc_invoicecustom'),
                'dc_sjncustom' => $request->Input('dc_sjncustom'),
            ]);

            $imporID = DImpor::insertGetId([
                'nokasbon' => $kelengkapan->kasbon->nokasbon,
                'di_pib' => $request->Input('di_pib'),
                'di_bl' => $request->Input('di_bl'),
                'di_com' => $request->Input('di_com'),
                'di_coo' => $request->Input('di_coo'),
                'di_invoicecustom' => $request->Input('di_invoicecustom'),
                'di_sjncustom' => $request->Input('di_sjncustom'),
            ]);

            $pajakID = DPajak::insertGetId([
                'nokasbon' => $kelengkapan->kasbon->nokasbon,
                'dp_kesesuaianfaktur' => $request->Input('dp_kesesuaianfaktur'),
                'dp_pajakpenghasilan' => $request->Input('dp_pajakpenghasilan'),
                'dp_suratnonpkp' => $request->Input('dp_suratnonpkp'),
            ]);

            $dinasID = DDinas::insertGetId([
                'nokasbon' => $kelengkapan->kasbon->nokasbon,
                'dd_tickettransport' => $request->Input('dd_tickettransport'),
                'dd_notamakan' => $request->Input('dd_notamakan'),
                'dd_boardingpass' => $request->Input('dd_boardingpass'),
                'dd_notapenginapan' => $request->Input('dd_notapenginapan'),
                'dd_sppd' => $request->Input('dd_sppd'),
            ]);

            $keteranganID = Keterangan::insertGetId([
                'nokasbon' => $kelengkapan->kasbon->nokasbon,
                'catatan' => $request->Input('catatan'),
            ]);

            foreach ($request->kekurangan as $key => $kekurangan) {
                $data = new Keterangan_detail();
                $tgl_kelengkapan = $request->input('tgl_kelengkapan');
                $data->id_keterangan = $keteranganID;
                $data->kekurangan = $kekurangan;
                $data->tgl_kelengkapan = $tgl_kelengkapan[$key];
                $data->save();
            }

            $idkelengkapan = $kelengkapan->kasbon->kelengkapan->id;
            $kelengkapan = Kelengkapan::find($idkelengkapan);
            $kelengkapan->update([
                'nokasbon' => $kelengkapan->kasbon->nokasbon,
                'id_kasbon' => $kelengkapan->kasbon->id,
                'id_dv' => $vendorID,
                'id_dc' => $customerID,
                'id_di' => $imporID,
                'id_dp' => $pajakID,
                'id_dd' => $dinasID,
                'id_kt' => $keteranganID
            ]);

            $idkasbon = $kelengkapan->kasbon->id;
            $kasbon = Kasbon::find($idkasbon);
            if ($kasbon->verifikasikasbon->vkb_a_2 = $request->Input('status') == 'Terverifikasi') {
                $kasbon->verifikasikasbon->vkb_a_2 = $request->Input('status');
                $kasbon->verifikasikasbon->vkb_a_1 = 'Terverifikasi';
                $kasbon->verifikasikasbon->vkb = 'Terverifikasi';
            } elseif ($kasbon->verifikasikasbon->vkb_a_2 = $request->Input('status') == 'Ditolak') {
                $kasbon->verifikasikasbon->vkb_a_1 = 'Ditolak';
                $kasbon->verifikasikasbon->vkb = 'Ditolak';
            } else {
                $kasbon->verifikasikasbon->vkb_a_2 = $request->Input('status');
            }
            $now = Carbon::now();
            $kelengkapan->kasbon->verifikasikasbon->vkb_a_2 = $request->Input('status');
            $kelengkapan->kasbon->verifikasikasbon->updated_at = $now;
            $kelengkapan->kasbon->verifikasikasbon->id_vkb_a_2 = Auth::user()->id;
            $kelengkapan->kasbon->verifikasikasbon->save();
        });

        return redirect()->route('vkb-atasan-2.index')
            ->with('success', 'Kasbon berhasil diverifikasi');
    }
}
