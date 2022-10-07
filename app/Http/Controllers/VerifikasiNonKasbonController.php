<?php

namespace App\Http\Controllers;

use App\Models\DokumenNK;
use App\Models\DokumenNKD;
use App\Models\NonKasbon;
use App\Models\VerifikasiNonKasbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class VerifikasiNonKasbonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nonkasbon = nonkasbon::all();
        $title = 'Kasbon';
        return view('vnk.index', compact('nonkasbon', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function cek_nonkasbon($id)
    {
        $nonkasbon = nonkasbon::find($id);

        $title = 'Detail';

        return view('vnk.cek_nonkasbon', compact('title', 'nonkasbon'));
    }

    public function cek_nonkasbon_edit($id)
    {
        $nonkasbon = Nonkasbon::find($id);
        $detail = DokumenNKD::where('id_dnk', $nonkasbon->dokumennk->id)->get();
        $iddk = $nonkasbon->id;
        $dknk = DokumenNKD::find($iddk);
        $title = 'Detail';

        return view('vnk.cek_nonkasbon_edit', compact('title', 'nonkasbon', 'detail'));
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVerifikasiNonKasbonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;

        DB::transaction(function () use ($request, $id) {
            $nonkasbon = nonkasbon::find($id);

            if ($nonkasbon->verifikasinonkasbon->vnk = $request->Input('status') == 'Terverifikasi') {
                $nonkasbon->verifikasinonkasbon->vnk_a_2 = 'Dalam Proses';
                $nonkasbon->verifikasinonkasbon->status = 'Dalam Proses';
                $nonkasbon->verifikasinonkasbon->vnk = $request->Input('status');
            } else {
                $nonkasbon->verifikasinonkasbon->vnk = $request->Input('status');
            }
            $nonkasbon->verifikasinonkasbon->update([
                'vnk' => $request->Input('status'),
                'status' => $request->Input('status'),
                'id_vnk' => Auth::user()->id
            ]);

            $doknkID = DokumenNK::insertGetId([
                'id_nonkasbon' => $nonkasbon->id,
                'total' => $request->Input('total'),
                'catatan' => $request->Input('catatan')

            ]);

            foreach ($request->dokumen as $key => $dokumen) {
                $data = new DokumenNKD();
                $nominal = $request->input('nominal');
                $data->id_dnk = $doknkID;
                $data->dokumen = $dokumen;
                $data->nominal = $nominal[$key];
                $data->save();
            }
        });
        return redirect()->route('vnk.index')->with('success', 'User updated successfully');
    }

    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {

            $nonkasbon = nonkasbon::find($id);
            if ($nonkasbon->verifikasinonkasbon->vnk = $request->Input('status') == 'Terverifikasi') {
                $nonkasbon->verifikasinonkasbon->vnk_a_2 = 'Dalam Proses';
                $nonkasbon->verifikasinonkasbon->status = 'Dalam Proses';
                $nonkasbon->verifikasinonkasbon->vnk = $request->Input('status');
            } else {
                $nonkasbon->verifikasinonkasbon->vnk = $request->Input('status');
            }
            $nonkasbon->verifikasinonkasbon->update([
                'vnk' => $request->Input('status'),
                'status' => $request->Input('status'),
                'id_vnk' => Auth::user()->id
            ]);

            $iddnk = $nonkasbon->dokumennk->id;
            $dnk = DokumenNK::find($iddnk);
            $dnk->update([
                'id_nonkasbon' => $nonkasbon->id,
                'total' => $request->Input('total'),
                'catatan' => $request->Input('catatan')
            ]);

            DokumenNKD::where('id_dnk', $iddnk)->delete();
            $data = $request->all();
            if ($request->dokumen) {
                foreach ($data['dokumen'] as $item => $value) {
                    $data2 = array(
                        'id_dnk' =>  $iddnk,
                        'dokumen' => $data['dokumen'][$item],
                        'nominal' => $data['nominal'][$item],
                    );
                    DokumenNKD::create($data2);
                }
            }
        });
        return redirect()->route('vnk.index')->with('success', 'User updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VerifikasiNonKasbon  $verifikasiNonKasbon
     * @return \Illuminate\Http\Response
     */
    public function show(VerifikasiNonKasbon $verifikasiNonKasbon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VerifikasiNonKasbon  $verifikasiNonKasbon
     * @return \Illuminate\Http\Response
     */
    public function edit(VerifikasiNonKasbon $verifikasiNonKasbon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVerifikasiNonKasbonRequest  $request
     * @param  \App\Models\VerifikasiNonKasbon  $verifikasiNonKasbon
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VerifikasiNonKasbon  $verifikasiNonKasbon
     * @return \Illuminate\Http\Response
     */
    public function destroy(VerifikasiNonKasbon $verifikasiNonKasbon)
    {
        //
    }
}
