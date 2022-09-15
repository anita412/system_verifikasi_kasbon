<?php

namespace App\Http\Controllers;

use App\Models\Kasbon;
use App\Models\Kurs;
use App\Models\Jenis;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('permission:kasbon-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:kasbon-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:kasbon-delete', ['only' => ['destroy']]);
        $this->middleware('permission:kasbon-verifikasi', ['only' => ['verifikasi']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Kasbon';
        $kasbons = Kasbon::latest()->paginate(5);
        return view('kasbons.index', compact('kasbons', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kurs = Kurs::all();
        $jenis = Jenis::all();
        $now = Carbon::now();
        $thnBulan = $now->year . $now->month . $now->day;
        $cek = Kasbon::count();
        $tglmasuk = Carbon::now()->format('Y-m-d');
        $terakhir = Kasbon::query()->latest('id')->first();
        if ($cek == 0) {
            $urut = 100001;
            $nomer = 'KSB' . $thnBulan . $urut;
        } else {
            $ambil = Kasbon::all()->last();
            $urut = (int)substr($ambil->kodekasbon, -1) + 1;
            $nomer = 'KSB' . $thnBulan . $urut;
        }
        $title = 'Input Kasbon';
        return view('kasbons.create', compact('title', 'nomer', 'terakhir', 'kurs', 'jenis', 'tglmasuk'));
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
            'tglmasuk' => 'required',
            'jammasuk' => 'required',
            'jeniskasbon' => 'required',
            // 'doksebelumnya'  => 'required',
            // 'username'  => 'required',
            // 'nip' => 'required',
            // 'unit' => 'required',
            // 'kodekasbon' => 'required',
            // 'jenis_kasbon' => 'required',
            // 'kurs' => 'required',
            // 'proyek' => 'required',
            // 'uraianpengguna' => 'required',
            // 'iddpp' => 'required',
            // 'idppn' => 'required',
            // 'id_pph' => 'required',
            // 'idpph' => 'required',
            // 'total' => 'required',
            // 'namavendor' => 'required',
            // 'haritempo' => 'required',
            // 'tgltempo' => 'required',
            // 'noinvoice' => 'required',
            // 'spph' => 'required',
            // 'po_vendor' => 'required',
            // 'po_customer' => 'required',
            // 'sjn' => 'required',
            // 'harga_jual' => 'required',
            // 'barang_datang' => 'required',
            // 'nopi' => 'required',
            // 'formatkasbon' => 'required',
        ]);

        $kasbon = new Kasbon;
        $kasbon->tglmasuk = $request->tglmasuk;
        $kasbon->jammasuk = $request->jammasuk;
        $kasbon->jeniskasbon = $request->jeniskasbon;
        $kasbon->username = Auth::user()->name;
        if ($kasbon->save()) {
            return redirect()->route('kasbons.index')
                ->with('success', 'Product created successfully.');
        } else {
            return redirect()->route('kasbons.index')
                ->with('success', 'Product not created successfully.');
        }


        // Kasbon::create($request->all());


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kasbon  $kasbon
     * @return \Illuminate\Http\Response
     */
    public function show(Kasbon $kasbons)
    {
        return view('kasbons.show', compact('kasbons'));
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
    public function edit(Kasbon $kasbon)
    {
        return view('kasbons.edit', compact('kasbon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kasbon  $kasbon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kasbon $kasbon)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $kasbon->update($request->all());

        return redirect()->route('kasbon.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kasbon $kasbon)
    {
        $kasbon->delete();

        return redirect()->route('kasbons.index')
            ->with('success', 'Kasbon deleted successfully');
    }
}
