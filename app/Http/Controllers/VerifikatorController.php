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
use App\Models\Keterangan_detail;
use App\Models\KodeKasbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikatorController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:verifikator-list|verifikator-create|verifikator-edit|verifikator-delete|verifikator-kelengkapan', ['only' => ['index', 'store']]);
        $this->middleware('permission:verifikator-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:verifikator-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:verifikator-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $kasbons = Kasbon::all();
        $title = 'Kasbon';
        return view('Verifikator.index', compact('kasbons', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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

            $kelengkapan = Kelengkapan::find($id);
            $kelengkapan->update([
                'status' => $request->Input('status'),
            ]);

            $idkasbon = $kelengkapan->kasbon->id;
            $kasbon = Kasbon::find($idkasbon);
            if ($kasbon->status = $request->Input('status') == 'Terverifikasi') {
                $kasbon->status = 'Dalam Proses';
            } else {
                $kasbon->status = $request->Input('status');
            }
            $kasbon->update();

            $idvendor = $kelengkapan->dvendor->id;
            $vendor = Dvendor::find($idvendor);
            $vendor->update([
                'dv_invoice' => $request->Input('dv_invoice'),
                'dv_kwitansi' => $request->Input('dv_kwitansi'),
                'dv_povendor' => $request->Input('dv_povendor'),
                'dv_sjnvendor' => $request->Input('dv_sjnvendor'),
                'dv_packcinglist' => $request->Input('dv_packinglist'),
                'dv_testreport' => $request->Input('dv_testreport'),
                'dv_bapp' => $request->Input('dv_bapp'),
                'dv_lppb' => $request->Input('dv_lppb'),
            ]);

            $idcustomer = $kelengkapan->dcustomer->id;
            $customer = DCustomer::find($idcustomer);
            $customer->update([
                'dc_memointernal' => $request->Input('dc_memointernal'),
                'dc_spph' => $request->Input('dc_spph'),
                'dc_ko' => $request->Input('dc_ko'),
                'dc_loi' => $request->Input('dc_loi'),
                'dc_invoicecustom' => $request->Input('dc_invoicecustom'),
                'dc_sjncustom' => $request->Input('dc_sjncustom'),
            ]);

            $iddinas = $kelengkapan->ddinas->id;
            $dinas = DDinas::find($iddinas);
            $dinas->update([
                'dd_tickettransport' => $request->Input('dd_tickettransport'),
                'dd_notamakan' => $request->Input('dd_notamakan'),
                'dd_boardingpass' => $request->Input('dd_boardingpass'),
                'dd_notapenginapan' => $request->Input('dd_notapenginapan'),
                'dd_sppd' => $request->Input('dd_sppd'),
            ]);

            $idimpor = $kelengkapan->dimpor->id;
            $impor = DImpor::find($idimpor);
            $impor->update([
                'di_pib' => $request->Input('di_pib'),
                'di_bl' => $request->Input('di_bl'),
                'di_com' => $request->Input('di_com'),
                'di_coo' => $request->Input('di_coo'),
                'di_invoicecustom' => $request->Input('di_invoicecustom'),
                'di_sjncustom' => $request->Input('di_sjncustom'),
            ]);

            $idpajak = $kelengkapan->dpajak->id;
            $pajak = DPajak::find($idpajak);
            $pajak->update([
                'dp_kesesuaianfaktur' => $request->Input('dp_kesesuaianfaktur'),
                'dp_pajakpenghasilan' => $request->Input('dp_pajakpenghasilan'),
                'dp_suratnonpkp' => $request->Input('dp_suratnonpkp'),
            ]);

            $idketerangan = $kelengkapan->keterangan->id;
            $keterangan = Keterangan::find($idketerangan);
            $keterangan->update([
                'catatan' => $request->Input('catatan'),
            ]);

            // $kelengkapan = Kelengkapan::find($id);
            $kd = $kelengkapan->keterangan->id;
            // foreach ($request->kekurangan as $key => $kekurangan) {
            //     $detail = Keterangan_detail::where('id_keterangan', $kd);
            //     $detail->update([
            //         'kekurangan' => $kekurangan,
            //     ]);
            // }

            $keterangandetail = Keterangan::with('keterangan_detail')->find($kd);
            Keterangan_detail::where('id_keterangan', $kd)->delete();
            $data = $request->all();
            if ($request->kekurangan) {
                foreach ($data['kekurangan'] as $item => $value) {
                    $data2 = array(
                        'id_keterangan' => $kd,
                        'kekurangan' => $data['kekurangan'][$item],
                        'tgl_kelengkapan' => $data['tgl_kelengkapan'][$item],
                    );
                    Keterangan_detail::create($data2);
                }
            }


            $keterangan->update([
                'catatan' => $request->Input('catatan'),
                //    'kekurangan_dok' => $request->Input('kekurangan_dok'), 
            ]);
        });
        return redirect()->route('verifikator.index')
            ->with('success', 'User updated successfully');
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

    public function kelengkapan($id)
    {
        $kasbon = Kasbon::find($id);

        $title = 'Detail';

        return view('verifikator.kelengkapan', compact('title', 'kasbon'));
    }

    public function kelengkapan_edit($id)
    {
        $kelengkapan = Kelengkapan::find($id);
        $kd = $kelengkapan->keterangan->id;
        $detail = Keterangan_detail::where('id_keterangan', $kd)->get();

        $title = 'Detail';

        return view('verifikator.edit-kelengkapan', compact('title', 'kelengkapan', 'detail'));
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $kasbon = Kasbon::find($id);

        $cekdok = '1';

        DB::transaction(function () use ($kasbon, $cekdok, $request) {

            $vendorID = Dvendor::insertGetId([
                'nokasbon' => $kasbon->nokasbon,
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
                'nokasbon' => $kasbon->nokasbon,
                'dc_memointernal' => $request->Input('dc_memointernal'),
                'dc_spph' => $request->Input('dc_spph'),
                'dc_ko' => $request->Input('dc_ko'),
                'dc_loi' => $request->Input('dc_loi'),
                'dc_invoicecustom' => $request->Input('dc_invoicecustom'),
                'dc_sjncustom' => $request->Input('dc_sjncustom'),
            ]);

            $imporID = DImpor::insertGetId([
                'nokasbon' => $kasbon->nokasbon,
                'di_pib' => $request->Input('di_pib'),
                'di_bl' => $request->Input('di_bl'),
                'di_com' => $request->Input('di_com'),
                'di_coo' => $request->Input('di_coo'),
                'di_invoicecustom' => $request->Input('di_invoicecustom'),
                'di_sjncustom' => $request->Input('di_sjncustom'),
            ]);

            $pajakID = DPajak::insertGetId([
                'nokasbon' => $kasbon->nokasbon,
                'dp_kesesuaianfaktur' => $request->Input('dp_kesesuaianfaktur'),
                'dp_pajakpenghasilan' => $request->Input('dp_pajakpenghasilan'),
                'dp_suratnonpkp' => $request->Input('dp_suratnonpkp'),
            ]);

            $dinasID = DDinas::insertGetId([
                'nokasbon' => $kasbon->nokasbon,
                'dd_tickettransport' => $request->Input('dd_tickettransport'),
                'dd_notamakan' => $request->Input('dd_notamakan'),
                'dd_boardingpass' => $request->Input('dd_boardingpass'),
                'dd_notapenginapan' => $request->Input('dd_notapenginapan'),
                'dd_sppd' => $request->Input('dd_sppd'),
            ]);

            $keteranganID = Keterangan::insertGetId([
                'nokasbon' => $kasbon->nokasbon,
                'catatan' => $request->Input('catatan'),
            ]);

            foreach ($request->kekurangan as $key => $kekurangan) {
                $data = new Keterangan_detail();
                $data->id_keterangan = $keteranganID;
                $data->kekurangan = $kekurangan;
                $data->save();
            }

            // $jumlah = count($request->kekurangan);
            // for ($i = 0; $i < $jumlah; $i++) {
            //     Keterangan_detail::insertGetId([
            //         'id_keterangan' => $keteranganID,
            //         'kekurangan' => $request->kekurangan[$i]
            //     ]);
            // }

            $id_kelengkapan = array('id_dv' => $vendorID, 'id_dc' => $customerID, 'nokasbon' => $kasbon->nokasbon, 'id_kasbon' => $kasbon->id, 'id_di' => $imporID, 'id_dp' => $pajakID, 'id_dd' => $dinasID, 'id_kt' => $keteranganID, 'status' =>  $request->Input('status'));
            DB::table('kelengkapans')->insert($id_kelengkapan);

            if ($kasbon->status = $request->Input('status') == 'Terverifikasi') {
                $kasbon->status = 'Dalam Proses';
            } else {
                $kasbon->status = $request->Input('status');
            }

            $kasbon->cekdokumen = $cekdok;
            $kasbon->id_verifikator_kasbon = Auth::user()->id;
            $kasbon->save();
        });

        return redirect()->route('verifikator.index')
            ->with('success', 'Kasbon berhasil diverifikasi');
    }
}
