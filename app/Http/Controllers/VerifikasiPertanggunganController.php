<?php

namespace App\Http\Controllers;

use App\Models\Pertanggungan;
use DB;
use App\Http\Requests\StorePertanggunganRequest;
use App\Http\Requests\UpdatePertanggunganRequest;
use App\Models\Kasbon;
use Carbon\Carbon;
use App\Models\Dvendor;
use App\Models\DCustomer;
use App\Models\DDinas;
use App\Models\DImpor;
use App\Models\DPajak;
use App\Models\Kelengkapan;
use App\Models\Keterangan;
use App\Models\Keterangan_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikasiPertanggunganController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:vkp-list|vkp-create|vkp-edit|vkp-delete|vkp-kelengkapan', ['only' => ['index', 'store']]);
        $this->middleware('permission:vkp-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:vkp-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:vkp-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $title = 'Pertanggungan';
        $pertanggungan = Pertanggungan::all();
        return view('vkp.index', compact('pertanggungan', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function cek_pertanggungan($id)
    {
        $pertanggungan = Pertanggungan::find($id);
        $title = 'Detail';
        return view('vkp.cek_pertanggungan', compact('title', 'pertanggungan'));
    }
    public function cek_pertanggungan_edit($id)
    {
        $pertanggungan = Pertanggungan::find($id);
        $detail = Keterangan_detail::where('id_keterangan', $pertanggungan->kasbon->kelengkapan->keterangan->id)->get();
        $title = 'Detail';
        return view('vkp.cek_pertanggungan_edit', compact('title', 'pertanggungan', 'detail'));
    }
    public function show($id)
    {
        $pertanggungan = Pertanggungan::find($id);
        $title = 'Detail';
        return view('verifikasi-pertanggungan.kelengkapan', compact('title', 'pertanggungan'));
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $pertanggungan = Pertanggungan::find($id);

        DB::transaction(function () use ($pertanggungan, $request) {
            $vendorID = Dvendor::insertGetId([

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

                'dc_memointernal' => $request->Input('dc_memointernal'),
                'dc_spph' => $request->Input('dc_spph'),
                'dc_ko' => $request->Input('dc_ko'),
                'dc_loi' => $request->Input('dc_loi'),
                'dc_invoicecustom' => $request->Input('dc_invoicecustom'),
                'dc_sjncustom' => $request->Input('dc_sjncustom'),
            ]);

            $imporID = DImpor::insertGetId([

                'di_pib' => $request->Input('di_pib'),
                'di_bl' => $request->Input('di_bl'),
                'di_com' => $request->Input('di_com'),
                'di_coo' => $request->Input('di_coo'),
                'di_invoicecustom' => $request->Input('di_invoicecustom'),
                'di_sjncustom' => $request->Input('di_sjncustom'),
            ]);

            $pajakID = DPajak::insertGetId([

                'dp_kesesuaianfaktur' => $request->Input('dp_kesesuaianfaktur'),
                'dp_pajakpenghasilan' => $request->Input('dp_pajakpenghasilan'),
                'dp_suratnonpkp' => $request->Input('dp_suratnonpkp'),
            ]);

            $dinasID = DDinas::insertGetId([

                'dd_tickettransport' => $request->Input('dd_tickettransport'),
                'dd_notamakan' => $request->Input('dd_notamakan'),
                'dd_boardingpass' => $request->Input('dd_boardingpass'),
                'dd_notapenginapan' => $request->Input('dd_notapenginapan'),
                'dd_sppd' => $request->Input('dd_sppd'),
            ]);

            $keteranganID = Keterangan::insertGetId([
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

            Kelengkapan::insertGetId([
                'id_dv' => $vendorID,
                'id_dc' => $customerID,
                'id_kasbon' => $pertanggungan->kasbon->id,
                'nokasbon' => $pertanggungan->kasbon->nokasbon,
                'id_di' => $imporID,
                'id_dp' => $pajakID,
                'id_dd' => $dinasID,
                'id_kt' => $keteranganID,
            ]);
            if ($pertanggungan->verifikasipertanggungan->vkp = $request->Input('status') == 'Terverifikasi') {
                $pertanggungan->verifikasipertanggungan->vkp = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->vkp_a_2 = 'Dalam Proses';
                $pertanggungan->verifikasipertanggungan->status = 'Dalam Proses';
            } else {
                $pertanggungan->verifikasipertanggungan->vkp = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->status =  $request->Input('status');
            }

            $now = Carbon::now();
            $pertanggungan->verifikasipertanggungan->updated_at = $now;
            $pertanggungan->verifikasipertanggungan->id_vkp = Auth::user()->id;
            $pertanggungan->verifikasipertanggungan->save();
        });

        return redirect()->route('vkp.index')->with('success', 'Kasbon updated successfully');
    }

    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {

            $pertanggungan = pertanggungan::find($id);
            if ($pertanggungan->verifikasipertanggungan->vkp = $request->Input('status') == 'Terverifikasi') {
                $pertanggungan->verifikasipertanggungan->vkp = 'Dalam Proses';
            } else {
                $pertanggungan->verifikasipertanggungan->vkp = $request->Input('status');
            }
            $pertanggungan->verifikasipertanggungan->update();

            $idvendor = $pertanggungan->kasbon->kelengkapan->dvendor->id;
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

            $idcustomer = $pertanggungan->kasbon->kelengkapan->dcustomer->id;
            $customer = DCustomer::find($idcustomer);
            $customer->update([
                'dc_memointernal' => $request->Input('dc_memointernal'),
                'dc_spph' => $request->Input('dc_spph'),
                'dc_ko' => $request->Input('dc_ko'),
                'dc_loi' => $request->Input('dc_loi'),
                'dc_invoicecustom' => $request->Input('dc_invoicecustom'),
                'dc_sjncustom' => $request->Input('dc_sjncustom'),
            ]);

            $iddinas = $pertanggungan->kasbon->kelengkapan->ddinas->id;
            $dinas = DDinas::find($iddinas);
            $dinas->update([
                'dd_tickettransport' => $request->Input('dd_tickettransport'),
                'dd_notamakan' => $request->Input('dd_notamakan'),
                'dd_boardingpass' => $request->Input('dd_boardingpass'),
                'dd_notapenginapan' => $request->Input('dd_notapenginapan'),
                'dd_sppd' => $request->Input('dd_sppd'),
            ]);

            $idimpor = $pertanggungan->kasbon->kelengkapan->dimpor->id;
            $impor = DImpor::find($idimpor);
            $impor->update([
                'di_pib' => $request->Input('di_pib'),
                'di_bl' => $request->Input('di_bl'),
                'di_com' => $request->Input('di_com'),
                'di_coo' => $request->Input('di_coo'),
                'di_invoicecustom' => $request->Input('di_invoicecustom'),
                'di_sjncustom' => $request->Input('di_sjncustom'),
            ]);

            $idpajak = $pertanggungan->kasbon->kelengkapan->dpajak->id;
            $pajak = DPajak::find($idpajak);
            $pajak->update([
                'dp_kesesuaianfaktur' => $request->Input('dp_kesesuaianfaktur'),
                'dp_pajakpenghasilan' => $request->Input('dp_pajakpenghasilan'),
                'dp_suratnonpkp' => $request->Input('dp_suratnonpkp'),
            ]);

            $idketerangan = $pertanggungan->kasbon->kelengkapan->keterangan->id;
            $keterangan = Keterangan::find($idketerangan);
            $keterangan->update([
                'catatan' => $request->Input('catatan'),
            ]);


            $kd = $pertanggungan->kasbon->kelengkapan->keterangan->id;
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

            if ($pertanggungan->verifikasipertanggungan->vkp = $request->Input('status') == 'Terverifikasi') {
                $pertanggungan->verifikasipertanggungan->vkp = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->vkp_a_2 = 'Dalam Proses';
                $pertanggungan->verifikasipertanggungan->status = 'Dalam Proses';
            } else {
                $pertanggungan->verifikasipertanggungan->vkp = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->status =  $request->Input('status');
            }
            $now = Carbon::now();
            $pertanggungan->verifikasipertanggungan->updated_at = $now;
            $pertanggungan->verifikasipertanggungan->id_vkp = Auth::user()->id;
            $pertanggungan->verifikasipertanggungan->save();
        });
        return redirect()->route('vkp.index')->with('success', 'User updated successfully');
    }
}
