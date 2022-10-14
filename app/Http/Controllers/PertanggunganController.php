<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Pertanggungan;
use App\Http\Requests\StorePertanggunganRequest;
use App\Http\Requests\UpdatePertanggunganRequest;
use App\Models\Kasbon;
use App\Models\Dvendor;
use App\Models\DCustomer;
use App\Models\DDinas;
use App\Models\DImpor;
use App\Models\DPajak;
use App\Models\Kelengkapan;
use App\Models\Keterangan;
use App\Models\Keterangan_detail;
use App\Models\KeteranganPertanggungan;
use App\Models\VerifikasiPertanggungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PertanggunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:pertanggungan-list|pertanggungan-create|pertanggungan-edit|pertanggungan-delete|pertanggungan-verifikasi|pertanggungan-insert', ['only' => ['index', 'show']]);
        $this->middleware('permission:pertanggungan-create', ['only' => ['create', 'store', 'insert', 'storee']]);
        $this->middleware('permission:pertanggungan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:pertanggungan-delete', ['only' => ['destroy']]);
        $this->middleware('permission:pertanggungan-verifikasi', ['only' => ['verifikasi']]);
    }

    public function generatePDF($id)
    {
        $pertanggungan = Pertanggungan::find($id);
        $kd = $pertanggungan->kasbon->kelengkapan->keterangan->id;
        $keterangan = Keterangan_detail::where('id_keterangan', $kd)->get();
        $detail = Keterangan_detail::where('id_keterangan', $kd)->get();
        return view('pdf.print-kasbon', compact('pertanggungan', 'detail', 'keterangan'));
    }

    public function index()
    {
        $title = 'Pertanggungan';

        $pertanggungan = Pertanggungan::all();
        return view('pertanggungan.index', compact('pertanggungan', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $kasbon = Kasbon::find($id);
        $title = 'Pertanggungan';
        return view('pertanggungan.entry', compact('title', 'kasbon'));
    }

    public function insert($id)
    {
        $kasbon = Kasbon::find($id);
        $title = 'Pertanggungan';
        return view('pertanggungan.entry', compact('title', 'kasbon'));
    }

    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {

            $id = $request->id;
            $kasbon = Kasbon::find($id);

            $pertanggunganID = Pertanggungan::insertGetId([
                'tglptj' => $request->tglptj,
                'selisihptjakhir' => $request->selisihptjakhir,
                'novkbselisihptj' => $request->novkbselisihptj,
                'nilaiselisihptj' => $request->nilaiselisihptj,
                'selisihptjakhir'  => $request->selisihptjakhir,
                'nokasbon' => $kasbon->nokasbon,
                'id_user' => $kasbon->id_user,
                'id_kasbon' => $kasbon->id,
                'id_kodekasbon' => $kasbon->id_kodekasbon,
                'uraianpengguna' => $kasbon->uraianpengguna,
                'user' => $kasbon->username,
                'nip' => $kasbon->nip,
                'id_unit' => $kasbon->id_unit,
                'jeniskasbon' => $kasbon->jeniskasbon,
                'namavendor'  => $kasbon->namavendor,
                'noinvoice' => $kasbon->noinvoice,
                'po_vendor'  => $kasbon->po_vendor,
                'proyek'  => $kasbon->proyek,
                'po_customer' => $kasbon->po_customer,
                'formatkasbon'  => $kasbon->formatkasbon,
                'nominalkasbon'  => $kasbon->total,
                'tgltempo'  => $kasbon->tgltempo,
                'haritempo'  => $kasbon->haritempo,
                'novkbkasbon'  => $kasbon->nopi,
                'tglbayarkeuser'  => $request->tglbayarkeuser,
                'nilaiptj'  => $request->nilaiptj,
                'selisihptj'  => $request->nilaiptj - $kasbon->total
            ]);

            VerifikasiPertanggungan::insertGetId([
                'id_pertanggungan' => $pertanggunganID,
                'vkp_a_1' => 'Dalam Proses',
                'status' => 'Dalam Proses',
            ]);
        });
        return redirect()->route('pertanggungan.index')->with('success', 'Kasbon created successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePertanggunganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storee(Request $request)
    {
        $id = $request->id;
        $pertanggungan = Pertanggungan::find($id);

        DB::transaction(function () use ($pertanggungan, $request) {
            $vendorID = Dvendor::insertGetId([
                'nokasbon' => $pertanggungan->kasbon->nokasbon,
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
                'nokasbon' => $pertanggungan->kasbon->nokasbon,
                'dc_memointernal' => $request->Input('dc_memointernal'),
                'dc_spph' => $request->Input('dc_spph'),
                'dc_ko' => $request->Input('dc_ko'),
                'dc_loi' => $request->Input('dc_loi'),
                'dc_invoicecustom' => $request->Input('dc_invoicecustom'),
                'dc_sjncustom' => $request->Input('dc_sjncustom'),
            ]);

            $imporID = DImpor::insertGetId([
                'nokasbon' => $pertanggungan->kasbon->nokasbon,
                'di_pib' => $request->Input('di_pib'),
                'di_bl' => $request->Input('di_bl'),
                'di_com' => $request->Input('di_com'),
                'di_coo' => $request->Input('di_coo'),
                'di_invoicecustom' => $request->Input('di_invoicecustom'),
                'di_sjncustom' => $request->Input('di_sjncustom'),
            ]);

            $pajakID = DPajak::insertGetId([
                'nokasbon' => $pertanggungan->kasbon->nokasbon,
                'dp_kesesuaianfaktur' => $request->Input('dp_kesesuaianfaktur'),
                'dp_pajakpenghasilan' => $request->Input('dp_pajakpenghasilan'),
                'dp_suratnonpkp' => $request->Input('dp_suratnonpkp'),
            ]);

            $dinasID = DDinas::insertGetId([
                'nokasbon' => $pertanggungan->kasbon->nokasbon,
                'dd_tickettransport' => $request->Input('dd_tickettransport'),
                'dd_notamakan' => $request->Input('dd_notamakan'),
                'dd_boardingpass' => $request->Input('dd_boardingpass'),
                'dd_notapenginapan' => $request->Input('dd_notapenginapan'),
                'dd_sppd' => $request->Input('dd_sppd'),
            ]);

            $keteranganID = Keterangan::insertGetId([
                'nokasbon' => $pertanggungan->kasbon->nokasbon,
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
                'nokasbon' => $pertanggungan->kasbon->nokasbon,
                'id_kasbon' => $pertanggungan->kasbon->id,
                'id_di' => $imporID,
                'id_dp' => $pajakID,
                'id_dd' => $dinasID,
                'id_kt' => $keteranganID,
                'status' =>  $request->Input('status')
            ]);
        });
        $pertanggungan->status = $request->Input('status');
        $pertanggungan->kasbon->status = $request->Input('status');
        $pertanggungan->kasbon->id_verifikator_ptj = Auth::user()->id;
        $pertanggungan->kasbon->save();
        return redirect()->route('pertanggungan.index')->with('success', 'Kasbon updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertanggungan  $pertanggungan
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $pertanggungan = Pertanggungan::find($id);

        $title = 'Detail';

        return view('pertanggungan.show', compact('title', 'pertanggungan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertanggungan  $pertanggungan
     * @return \Illuminate\Http\Response
     */

    public function cek($id)
    {
        $pertanggungan = Pertanggungan::find($id);

        $title = 'Detail';

        return view('pertanggungan.lihat-kelengkapan', compact('title', 'pertanggungan'));
    }

    public function edit($id)
    {
        $pertanggungan = Pertanggungan::find($id);
        $detail = KeteranganPertanggungan::where('id_pertanggungan', $id)->get();
        $title = 'Detail';
        return view('pertanggungan.edit', compact('title', 'pertanggungan', 'detail'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePertanggunganRequest  $request
     * @param  \App\Models\Pertanggungan  $pertanggungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = $request->id;
        $pertanggungan = Pertanggungan::find($id);

        DB::transaction(function () use ($request, $id, $pertanggungan) {

            $pertanggungan->tglptj = $request->tglptj;
            $pertanggungan->selisihptjakhir = $request->selisihptjakhir;
            $pertanggungan->novkbselisihptj = $request->novkbselisihptj;
            $pertanggungan->nilaiselisihptj = $request->nilaiselisihptj;
            $pertanggungan->selisihptjakhir  = $request->selisihptjakhir;
            $pertanggungan->nokasbon = $pertanggungan->kasbon->nokasbon;
            $pertanggungan->id_user = $pertanggungan->kasbon->id_user;
            $pertanggungan->id_kasbon = $pertanggungan->kasbon->id;
            $pertanggungan->id_kodekasbon = $pertanggungan->kasbon->id_kodekasbon;
            $pertanggungan->uraianpengguna = $pertanggungan->kasbon->uraianpengguna;
            $pertanggungan->user = $pertanggungan->kasbon->username;
            $pertanggungan->nip = $pertanggungan->kasbon->nip;
            $pertanggungan->id_unit = $pertanggungan->kasbon->id_unit;
            $pertanggungan->jeniskasbon = $pertanggungan->kasbon->jeniskasbon;
            $pertanggungan->namavendor  = $pertanggungan->kasbon->namavendor;
            $pertanggungan->noinvoice = $pertanggungan->kasbon->noinvoice;
            $pertanggungan->po_vendor  = $pertanggungan->kasbon->po_vendor;
            $pertanggungan->proyek  = $pertanggungan->kasbon->proyek;
            $pertanggungan->po_customer = $pertanggungan->kasbon->po_customer;
            $pertanggungan->formatkasbon  = $pertanggungan->kasbon->formatkasbon;
            $pertanggungan->nominalkasbon  = $pertanggungan->kasbon->total;
            $pertanggungan->tgltempo  = $pertanggungan->kasbon->tgltempo;
            $pertanggungan->haritempo  = $pertanggungan->kasbon->haritempo;
            $pertanggungan->novkbkasbon  = $pertanggungan->kasbon->nopi;
            $pertanggungan->tglbayarkeuser  = $request->tglbayarkeuser;
            $pertanggungan->nilaiptj  = $request->nilaiptj;
            $pertanggungan->selisihptj  = $request->nilaiptj - $pertanggungan->kasbon->total;

            $pertanggungan->update($request->all());

            $idvkp = $pertanggungan->verifikasipertanggungan->id;
            $vkp = VerifikasiPertanggungan::find($idvkp);
            $vkp->update([
                'vkp_a_1' => 'Dalam Proses',
                'status' => 'Dalam Proses',
            ]);
        });
        return redirect()->route('pertanggungan.index')
            ->with('success', 'Pertanggungan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertanggungan  $pertanggungan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pertanggungan::find($id)->delete();
        return redirect()->route('pertanggungan.index')
            ->with('success', 'Pertanggungan deleted successfully');
    }
}
