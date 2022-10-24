<?php

namespace App\Http\Controllers;

use App\Exports\KasbonExport;
use DB;
use App\Models\Kasbon;
use App\Models\Kurs;
use App\Models\Jenis;
use App\Models\Pph;
use App\Models\Kelengkapan;
use App\Models\KodeKasbon;
use App\Models\Keterangan;
use App\Models\Keterangan_detail;
use App\Models\Pertanggungan;
use App\Models\NamaVendor;
use App\Models\VerifikasiKasbon;
use App\Models\KeteranganKasbon;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class KasbonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:kasbon-list|kasbon-create|kasbon-edit|kasbon-delete|kasbon-verifikasi', ['only' => ['index', 'show', 'kasbonexport']]);
        $this->middleware('permission:kasbon-create', ['only' => ['create', 'store', 'store1']]);
        $this->middleware('permission:kasbon-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:kasbon-delete', ['only' => ['destroy']]);
        $this->middleware('permission:kasbon-verifikasi', ['only' => ['verifikasi']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cetakdata(Request $request)
    {
        $tglawal = $request->tglawal;
        $tglakhir = $request->tglakhir;

        if ($tglawal and $tglakhir) {
            $kasbon = Kasbon::whereBetween('tglmasuk', [$tglawal, $tglakhir])->get();
        } else {
            $kasbon = Kasbon::all();
        }

        return view('kasbon.cetak', compact('kasbon'));
    }

    public function generatePDF($id)
    {
        $pertanggungan = Pertanggungan::find($id);
        $kd = $pertanggungan->kasbon->kelengkapan->keterangan->id;
        $keterangan = Keterangan_detail::where('id_keterangan', $kd)->get();
        $detail = Keterangan_detail::where('id_keterangan', $kd)->get();
        return view('pdf.print-kasbon', compact('pertanggungan', 'detail', 'keterangan'));
    }


    public function printsp1($id)
    {
        $kasbon = Kasbon::find($id);

        return view('pdf.print-sp1', compact('kasbon',  'kasbon'));
    }

    public function printsp2($id)
    {
        $kasbon = Kasbon::find($id);

        return view('pdf.print-sp2', compact('kasbon',  'kasbon'));
    }

    public function printsp3($id)
    {
        $kasbon = Kasbon::find($id);

        return view('pdf.print-sp3', compact('kasbon',  'kasbon'));
    }
    public function index()
    {
        $now = Carbon::now()->format('Y-m-d');
        $title = 'Kasbon';
        $kasbon = Kasbon::latest()->paginate();
        return view('kasbon.index', compact('kasbon', 'title', 'now'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dueDate = now()->addDays(30)->format('Y-m-d');
        $pph = Pph::all();
        $kurs = Kurs::all();
        $jenis = Jenis::all();
        $namavendor = NamaVendor::all();
        $kodekasbon = KodeKasbon::all();
        $now = Carbon::now();
        $jamnow = Carbon::now()->format('H:i:s');
        $thnBulan = Carbon::now()->format('Y-m-d');
        $cek = Kasbon::count();
        $tglmasuk = Carbon::now()->format('Y-m-d');
        $terakhir = Kasbon::query()->latest('id')->first();
        if ($cek == 0) {
            $urut = 100001;
            $nomer = 'KSB' . $thnBulan . '-' . $urut;
            $n0mer = 'D' . $urut;
            $terakhir = 'KSB20221013-0';
        } else {
            $ambil = Kasbon::all()->last();
            $urut = (int)substr($ambil->nokasbon, -1) + 1;
            $nomer = 'KSB' . $thnBulan . '-' . $urut;
            $uru_t = (int)substr($ambil->nokasbon, -1) + 1;
            $n0mer = 'D' . $uru_t;
        }
        $title = 'Input Kasbon';
        return view('kasbon.create', compact('title', 'nomer', 'terakhir', 'kurs', 'jenis', 'tglmasuk', 'pph', 'dueDate', 'jamnow', 'n0mer', 'kodekasbon', 'namavendor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'jeniskasbon' => 'required',
            'id_jenis' => 'required',
            'id_kurs' => 'required',
            'proyek' => 'required',
            'uraianpengguna' => 'required',
            'iddpp' => 'required',
            'idppn' => 'required',
            'id_pph' => 'required',
            'idpph' => 'required',
            'namavendor' => 'required',
            'haritempo' => 'required',
            'noinvoice' => 'required',
            'spph' => 'required',
            'po_vendor' => 'required',
            'po_customer' => 'required',
            'sjn' => 'required',
            'harga_jual' => 'required',
            'barang_datang' => 'required',
            'nopi' => 'required',

        ]);

        DB::transaction(function () use ($request) {
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

            $kasbonID = Kasbon::insertGetId([
                'tglmasuk' => $request->tglmasuk,
                'jammasuk' => $request->jammasuk,
                'id_kurs' => $request->id_kurs,
                'proyek' => $request->proyek,
                'jeniskasbon' => $request->jeniskasbon,
                'nip' => Auth::user()->nip,
                'id_unit' => Auth::user()->id_unit,
                'id_user' => Auth::user()->id,
                'doksebelumnya' => $terakhir->nokasbon,
                'nokasbon' => $nomer,
                'id_kodekasbon' => $request->kodekasbon,
                'uraianpengguna' => $request->uraianpengguna,
                'iddpp' => $request->iddpp,
                'idppn' => $request->idppn,
                'id_jenis' => $request->id_jenis,
                'id_pph' => $request->id_pph,
                'idpph' => $request->idpph,
                'total' => $request->iddpp + $request->idppn + $request->idpph,
                'namavendor' => $request->namavendor,
                'haritempo' => $request->haritempo,
                'tgltempo' => now()->addDays($request->haritempo),
                'noinvoice' => $request->noinvoice,
                'spph' => $request->spph,
                'po_vendor' => $request->po_vendor,
                'po_customer' => $request->po_customer,
                'sjn' => $request->sjn,
                'harga_jual' => $request->harga_jual,
                'barang_datang' => $request->barang_datang,
                'nopi' => $request->nopi,
                'formatkasbon' => $nomer . ';' . $request->jeniskasbon . ' AN ' . Auth::user()->name . ';' . $request->uraianpengguna . ';' . $request->po_customer . ';' . $request->proyek,
                'created_at' => $now
            ]);

            VerifikasiKasbon::insertGetId([
                'id_kasbon' => $kasbonID,
                'vkb_a_1' => 'Dalam Proses',
                'status' => 'Dalam Proses',
            ]);
        });

        return redirect()->route('kasbon.index')->with('success', 'Kasbon created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Kasbon  $kasbon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelengkapan = Kelengkapan::find($id);
        if (isset($kelengkapan->keterangan->id)) {
            $detail = Keterangan_detail::where('id_keterangan', $kelengkapan->keterangan->id)->get();
            $keterangan = Keterangan::all();
            $kasbon = Kasbon::find($id);
            $pph = Pph::all();
            $kurs = Kurs::all();
            $jenis = Jenis::all();
            $title = 'Detail';
            return view('kasbon.show', compact('title', 'kasbon', 'pph', 'kurs', 'jenis',  'kelengkapan', 'keterangan', 'detail'));
        } else {
            $keterangan = Keterangan::all();
            $kasbon = Kasbon::find($id);
            $pph = Pph::all();
            $kurs = Kurs::all();
            $jenis = Jenis::all();
            $title = 'Detail';
            return view('kasbon.show', compact('title', 'kasbon', 'pph', 'kurs', 'jenis',  'kelengkapan', 'keterangan'));
        }
    }
    public function verifikasi(Kasbon $kasbon)
    {
        return view('kasbon.verifikasi', compact('kasbon'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kasbon  $kasbon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kasbon = Kasbon::find($id);
        $detail = KeteranganKasbon::where('id_kasbon', $id)->get();
        $pph = Pph::all();
        $namavendor = namavendor::all();
        $kurs = Kurs::all();
        $jenis = Jenis::all();
        $title = 'Detail';
        return view('kasbon.edit', compact('title', 'kasbon', 'pph', 'kurs', 'jenis', 'detail', 'namavendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kasbon  $kasbon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $kasbon = Kasbon::find($id);
            $kasbon->id_kurs = $request->id_kurs;
            $kasbon->proyek = $request->proyek;
            $kasbon->nip = Auth::user()->nip;
            $kasbon->id_unit = Auth::user()->id_unit;
            $kasbon->id_user = Auth::user()->id;
            $kasbon->uraianpengguna = $request->uraianpengguna;
            $kasbon->iddpp = $request->iddpp;
            $kasbon->idppn = $request->idppn;
            $kasbon->id_jenis = $request->id_jenis;
            $kasbon->id_pph = $request->id_pph;
            $kasbon->idpph = $request->idpph;
            $kasbon->total = $request->iddpp + $request->idppn + $request->idpph;
            $kasbon->namavendor = $request->namavendor;
            $kasbon->haritempo = $request->haritempo;
            $kasbon->tgltempo = now()->addDays($request->haritempo);
            $kasbon->noinvoice = $request->noinvoice;
            $kasbon->spph = $request->spph;
            $kasbon->po_vendor = $request->po_vendor;
            $kasbon->po_customer = $request->po_customer;
            $kasbon->sjn = $request->sjn;
            $kasbon->harga_jual = $request->harga_jual;
            $kasbon->barang_datang = $request->barang_datang;
            $kasbon->nopi = $request->nopi;
            $kasbon->formatkasbon = $kasbon->nokasbon . ';' . $kasbon->jeniskasbon . ' AN ' . Auth::user()->name . ';' . $request->uraianpengguna . ';' . $request->po_customer . ';' . $request->proyek;


            $kasbon->update($request->all());

            $idvkb = $kasbon->verifikasikasbon->id;
            $vkb = VerifikasiKasbon::find($idvkb);
            $vkb->update([
                'vkb_a_1' => 'Dalam Proses',
                'status' => 'Dalam Proses',
            ]);
        });
        return redirect()->route('kasbon.index')->with('success', 'Kasbon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kasbon::find($id)->delete();
        return redirect()->route('kasbon.index')
            ->with('success', 'Kasbon deleted successfully');
    }

    public function kasbonexport(Request $request)
    {

        $tglawal = $request->tglawal;
        $tglakhir = $request->tglakhir;

        if ($tglawal and $tglakhir) {
            $kasbon = Kasbon::whereBetween('tglmasuk', [$tglawal, $tglakhir])->get();
        } else {
            $kasbon = Kasbon::all();
        }
        return Excel::download(new KasbonExport($kasbon), 'kasbon.xlsx');
        // return view('kasbon.cetak', compact('kasbon'));
    }
}
