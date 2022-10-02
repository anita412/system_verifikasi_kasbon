<?php

namespace App\Http\Controllers;

use App\Models\Pertanggungan;
use App\Http\Requests\StorePertanggunganRequest;
use App\Http\Requests\UpdatePertanggunganRequest;
use App\Models\Kasbon;
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

    public function storee(Request $request)
    {

        $id = $request->id;
        $kasbon = Kasbon::find($id);

        $pertanggungan = new pertanggungan;
        $pertanggungan->tglptj = $request->tglptj;
        $pertanggungan->selisihptjakhir = $request->selisihptjakhir;
        $pertanggungan->novkbselisihptj = $request->novkbselisihptj;
        $pertanggungan->nilaiselisihptj = $request->nilaiselisihptj;
        $pertanggungan->selisihptjakhir  = $request->selisihptjakhir;
        $pertanggungan->nokasbon = $kasbon->nokasbon;
        $pertanggungan->id_user = $kasbon->id_user;
        $pertanggungan->id_kasbon = $kasbon->id;
        $pertanggungan->id_kodekasbon = $kasbon->id_kodekasbon;
        $pertanggungan->uraianpengguna = $kasbon->uraianpengguna;
        $pertanggungan->user = $kasbon->username;
        $pertanggungan->nip = $kasbon->nip;
        $pertanggungan->id_unit = $kasbon->id_unit;
        $pertanggungan->jeniskasbon = $kasbon->jeniskasbon;
        $pertanggungan->namavendor  = $kasbon->namavendor;
        $pertanggungan->noinvoice = $kasbon->noinvoice;
        $pertanggungan->po_vendor  = $kasbon->po_vendor;
        $pertanggungan->proyek  = $kasbon->proyek;
        $pertanggungan->po_customer = $kasbon->po_customer;
        $pertanggungan->formatkasbon  = $kasbon->formatkasbon;
        $pertanggungan->nominalkasbon  = $kasbon->total;
        $pertanggungan->tgltempo  = $kasbon->tgltempo;
        $pertanggungan->haritempo  = $kasbon->haritempo;
        $pertanggungan->novkbkasbon  = $request->novkbkasbon;
        $pertanggungan->tglbayarkeuser  = $request->tglbayarkeuser;
        $pertanggungan->nilaiptj  = $request->nilaiptj;
        $pertanggungan->id_verifikator_kasbon  = $kasbon->id_user;
        $pertanggungan->id_verifikator_ptj  = Auth::user()->id;
        $pertanggungan->selisihptj  = $request->selisihptj;

        $cekdok = '2';
        $kasbon->cekdokumen = $cekdok;
        $kasbon->id_verifikator_ptj = Auth::user()->id;
        $kasbon->save();

        if ($pertanggungan->save()) {
            return redirect()->route('pertanggungan.index')
                ->with('success', 'Kasbon created successfully.');
        } else {
            return redirect()->route('pertanggungan.index')
                ->with('success', 'Product not created successfully.');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePertanggunganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePertanggunganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertanggungan  $pertanggungan
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanggungan $pertanggungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertanggungan  $pertanggungan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kasbon = Kasbon::find($id);
        $title = 'Pertanggungan';
        return view('pertanggungan.edit', compact('title', 'kasbon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePertanggunganRequest  $request
     * @param  \App\Models\Pertanggungan  $pertanggungan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePertanggunganRequest $request, Pertanggungan $pertanggungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertanggungan  $pertanggungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanggungan $pertanggungan)
    {
        //
    }
}
