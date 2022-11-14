<?php

namespace App\Http\Controllers;

use App\Models\DokumenNK;
use App\Models\DokumenNKD;
use App\Models\NonKasbon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\KeteranganNonKasbon;
use DB;

class VerifikasiNonKasbonAtasan3Controller extends Controller
{
    public function index()
    {
        $nonkasbon = nonkasbon::all();
        $title = 'Kasbon';
        return view('vnk-atasan-3.index', compact('nonkasbon', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function cek_nonkasbon($id)
    {
        $nonkasbon = nonkasbon::find($id);

        $title = 'Detail';

        return view('vnk-atasan-3.cek_nonkasbon', compact('title', 'nonkasbon'));
    }

    public function cek_nonkasbon_edit($id)
    {
        $nonkasbon = Nonkasbon::find($id);
        $detail = DokumenNKD::where('id_dnk', $nonkasbon->dokumennk->id)->get();
        $iddk = $nonkasbon->id;
        $dknk = DokumenNKD::find($iddk);
        $title = 'Detail';

        return view('vnk-atasan-3.cek_nonkasbon_edit', compact('title', 'nonkasbon', 'detail'));
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
            $now = Carbon::now();
            if ($nonkasbon->verifikasinonkasbon->vnk_a_3 = $request->Input('status') == 'Terverifikasi') {
                $nonkasbon->verifikasinonkasbon->status = 'Terverifikasi';
                $nonkasbon->verifikasinonkasbon->vnk_a_3 = $request->Input('status');
            } else {
                $nonkasbon->verifikasinonkasbon->vnk_a_3 = $request->Input('status');
            }
            $nonkasbon->verifikasinonkasbon->update([
                'vnk_a_3' => $request->Input('status'),
                'status' => $request->Input('status'),
                'id_vnk_a_3' => Auth::user()->id,
                'updated_at' =>  $now
            ]);

            $idketerangan = $nonkasbon->keterangannonkasbon->id;
            $keterangan = KeterangannonKasbon::find($idketerangan);
            $keterangan->update([
                'keterangan' => $request->Input('keterangan'),
                'updated_at' => $now
            ]);
            // $doknkID = DokumenNK::insertGetId([
            //     'id_nonkasbon' => $nonkasbon->id,
            //     'total' => $request->Input('total'),
            //     'catatan' => $request->Input('catatan')

            // ]);

            // foreach ($request->dokumen as $key => $dokumen) {
            //     $data = new DokumenNKD();
            //     $nominal = $request->input('nominal');
            //     $data->id_dnk = $doknkID;
            //     $data->dokumen = $dokumen;
            //     $data->nominal = $nominal[$key];
            //     $data->save();
            // }
        });
        return redirect()->route('vnk-atasan-3.index')->with('success', 'User updated successfully');
    }

    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $now = Carbon::now();
            $nonkasbon = nonkasbon::find($id);
            if ($nonkasbon->verifikasinonkasbon->vnk_a_3 = $request->Input('status') == 'Terverifikasi') {
                $nonkasbon->verifikasinonkasbon->status = $request->Input('status');
                $nonkasbon->verifikasinonkasbon->vnk_a_3 = $request->Input('status');
            } else {
                $nonkasbon->verifikasinonkasbon->vnk_a_3 = $request->Input('status');
            }
            $nonkasbon->verifikasinonkasbon->update([
                'vnk_a_3' => $request->Input('status'),
                'status' => $request->Input('status'),
                'id_vnk_a_3' => Auth::user()->id,
                'updated_at' =>  $now
            ]);

            $idketerangan = $nonkasbon->keterangannonkasbon->id;
            $keterangan = KeterangannonKasbon::find($idketerangan);
            $keterangan->update([
                'keterangan' => $request->Input('keterangan'),
                'updated_at' => $now
            ]);

            // $iddnk = $nonkasbon->dokumennk->id;
            // $dnk = DokumenNK::find($iddnk);
            // $dnk->update([
            //     'id_nonkasbon' => $nonkasbon->id,
            //     'total' => $request->Input('total'),
            //     'catatan' => $request->Input('catatan')
            // ]);

            // DokumenNKD::where('id_dnk', $iddnk)->delete();
            // $data = $request->all();
            // if ($request->dokumen) {
            //     foreach ($data['dokumen'] as $item => $value) {
            //         $data2 = array(
            //             'id_dnk' =>  $iddnk,
            //             'dokumen' => $data['dokumen'][$item],
            //             'nominal' => $data['nominal'][$item],
            //         );
            //         DokumenNKD::create($data2);
            //     }
            // }
        });
        return redirect()->route('vnk-atasan-3.index')->with('success', 'Non Kasbon updated successfully');
    }
}
