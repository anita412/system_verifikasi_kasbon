<?php

namespace App\Http\Controllers;

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
use App\Models\Keterangan;
use App\Models\Keterangan_detail;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $this->middleware('permission:kasbon-list|kasbon-create|kasbon-edit|kasbon-delete|kasbon-verifikasi', ['only' => ['index', 'show']]);
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
    public function generatePDF($id)
    {
        $kelengkapan = Kelengkapan::find($id);
        $kd = $kelengkapan->keterangan->id;
        $keterangan = Keterangan_detail::where('id_keterangan', $kd)->get();
        $detail = Keterangan_detail::where('id_keterangan', $kd)->get();
        return view('pdf.print-kasbon', compact('kelengkapan', 'detail', 'keterangan'));
    }

    public function index()
    {
        $jenis = Jenis::all();
        $title = 'Kasbon';
        $kasbons = Kasbon::latest()->paginate();
        return view('kasbons.index', compact('kasbons', 'title', 'jenis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        $title = 'Input Kasbon';
        return view('kasbons.create', compact('title', 'nomer', 'terakhir', 'kurs', 'jenis', 'tglmasuk', 'pph', 'dueDate', 'jamnow', 'n0mer', 'kodekasbon'));
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

        $kasbon = new Kasbon;
        $kasbon->tglmasuk = $request->tglmasuk;
        $kasbon->jammasuk = $request->jammasuk;
        $kasbon->id_kurs = $request->id_kurs;
        $kasbon->proyek = $request->proyek;
        $kasbon->jeniskasbon = $request->jeniskasbon;
        $kasbon->username = Auth::user()->name;
        $kasbon->nip = Auth::user()->nip;
        $kasbon->id_unit = Auth::user()->id_unit;
        $kasbon->id_user = Auth::user()->id;
        $kasbon->doksebelumnya = $terakhir->nokasbon;
        $kasbon->nokasbon = $nomer;
        $kasbon->id_kodekasbon = $request->id_kodekasbon;
        $kasbon->uraianpengguna = $request->uraianpengguna;
        $kasbon->iddpp = $request->iddpp;
        $kasbon->idppn = $request->idppn;
        $kasbon->id_jenis = $request->id_jenis;
        $kasbon->id_pph = $request->id_pph;
        $kasbon->idpph = $request->idpph;
        $kasbon->total = $request->iddpp + $request->idppn + $request->idpph;
        $kasbon->namavendor = $request->namavendor;
        $kasbon->haritempo = $request->haritempo;
        $kasbon->tgltempo = now()->addDays(30);
        $kasbon->noinvoice = $request->noinvoice;
        $kasbon->spph = $request->spph;
        $kasbon->po_vendor = $request->po_vendor;
        $kasbon->po_customer = $request->po_customer;
        $kasbon->sjn = $request->sjn;
        $kasbon->harga_jual = $request->harga_jual;
        $kasbon->barang_datang = $request->barang_datang;
        $kasbon->nopi = $request->nopi;
        $kasbon->formatkasbon = $nomer . ';' . $request->jeniskasbon . ' AN ' . Auth::user()->name . ';' . $request->uraianpengguna . ';' . $request->po_customer . ';' . $request->proyek;
        $kasbon->status = 'Dalam Proses';
        $kasbon->cekdokumen = '0';

        if ($kasbon->save()) {
            return redirect()->route('kasbons.index')
                ->with('success', 'Kasbon created successfully.');
        } else {
            return redirect()->route('kasbons.index')
                ->with('success', 'Product not created successfully.');
        }
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
            return view('kasbons.show', compact('title', 'kasbon', 'pph', 'kurs', 'jenis',  'kelengkapan', 'keterangan', 'detail'));
        } else {
            $keterangan = Keterangan::all();
            $kasbon = Kasbon::find($id);
            $pph = Pph::all();
            $kurs = Kurs::all();
            $jenis = Jenis::all();
            $title = 'Detail';
            return view('kasbons.show', compact('title', 'kasbon', 'pph', 'kurs', 'jenis',  'kelengkapan', 'keterangan'));
        }
    }
    public function verifikasi(Kasbon $kasbons)
    {
        return view('kasbons.verifikasi', compact('kasbons'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kasbon  $kasbon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelengkapan = Kelengkapan::find($id);
        $kd = $kelengkapan->keterangan->id;
        $detail = Keterangan_detail::where('id_keterangan', $kd)->get();
        $keterangan = Keterangan::all();
        $kasbon = Kasbon::find($id);
        $pph = Pph::all();
        $kurs = Kurs::all();
        $jenis = Jenis::all();
        $title = 'Detail';
        return view('kasbons.edit', compact('title', 'kasbon', 'pph', 'kurs', 'jenis',  'kelengkapan', 'keterangan', 'detail'));
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
        request()->validate([]);

        $kasbon = Kasbon::find($id);
        $kasbon->id_kurs = $request->id_kurs;
        $kasbon->proyek = $request->proyek;
        $kasbon->jeniskasbon = $request->jeniskasbon;
        $kasbon->username = Auth::user()->name;
        $kasbon->nip = Auth::user()->nip;
        $kasbon->id_unit = Auth::user()->id_unit;
        $kasbon->id_user = Auth::user()->id;
        $kasbon->id_kodekasbon = $request->id_kodekasbon;
        $kasbon->uraianpengguna = $request->uraianpengguna;
        $kasbon->iddpp = $request->iddpp;
        $kasbon->idppn = $request->idppn;
        $kasbon->id_jenis = $request->id_jenis;
        $kasbon->id_pph = $request->id_pph;
        $kasbon->idpph = $request->idpph;
        $kasbon->total = $request->iddpp + $request->idppn + $request->idpph;
        $kasbon->namavendor = $request->namavendor;
        $kasbon->haritempo = $request->haritempo;
        $kasbon->tgltempo = now()->addDays(30);
        $kasbon->noinvoice = $request->noinvoice;
        $kasbon->spph = $request->spph;
        $kasbon->po_vendor = $request->po_vendor;
        $kasbon->po_customer = $request->po_customer;
        $kasbon->sjn = $request->sjn;
        $kasbon->harga_jual = $request->harga_jual;
        $kasbon->barang_datang = $request->barang_datang;
        $kasbon->nopi = $request->nopi;
        $kasbon->formatkasbon = $kasbon->nokasbon . ';' . $request->jeniskasbon . ' AN ' . Auth::user()->name . ';' . $request->uraianpengguna . ';' . $request->po_customer . ';' . $request->proyek;
        $kasbon->status = 'Dalam Proses';
        $kasbon->cekdokumen = '0';

        $kasbon->update($request->all());

        return redirect()->route('kasbons.index')
            ->with('success', 'Kasbon updated successfully');
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
        return redirect()->route('kasbons.index')
            ->with('success', 'Kasbon deleted successfully');
    }
}
