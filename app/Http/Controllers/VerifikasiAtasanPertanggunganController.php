<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanggungan;
use App\Models\KeteranganPertanggungan;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

class VerifikasiAtasanPertanggunganController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:vkp-atasan-list|vkp-atasan-create|vkp-atasan-edit|vkp-atasan-delete|vkp-atasan-kelengkapan', ['only' => ['index', 'store']]);
        $this->middleware('permission:vkp-atasan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:vkp-atasan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:vkp-atasan-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $pertanggungan = Pertanggungan::all();
        $title = 'Pertanggungan';
        return view('vkp-atasan.index', compact('pertanggungan', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function cek_pertanggungan($id)
    {
        $pertanggungan = Pertanggungan::find($id);

        $title = 'Detail';

        return view('vkp-atasan.cek_pertanggungan', compact('title', 'pertanggungan'));
    }

    public function cek_pertanggungan_edit($id)
    {
        $pertanggungan = pertanggungan::find($id);
        $detail = KeteranganPertanggungan::where('id_pertanggungan', $id)->get();

        $title = 'Detail';

        return view('vkp-atasan.cek_pertanggungan_edit', compact('title', 'pertanggungan', 'detail'));
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $pertanggungan = Pertanggungan::find($id);
        $now = Carbon::now();
        DB::transaction(function () use ($pertanggungan, $request, $id, $now) {

            KeteranganPertanggungan::insertGetId([
                'id_pertanggungan' => $id,
                'keterangan' => $request->Input('keterangan'),
                'created_at' => $now,
                'updated_at' => $now
            ]);

            if ($pertanggungan->verifikasipertanggungan->vkp_a_1 = $request->Input('status') == 'Terverifikasi') {
                $pertanggungan->verifikasipertanggungan->vkp_a_1 = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->vkp = 'Dalam Proses';
                $pertanggungan->verifikasipertanggungan->status = 'Dalam Proses';
            } else {
                $pertanggungan->verifikasipertanggungan->vkp_a_1 = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->status = $request->Input('status');
            }
            $pertanggungan->verifikasipertanggungan->updated_at = $now;
            $pertanggungan->verifikasipertanggungan->id_vkp_a_1 = Auth::user()->id;
            $pertanggungan->verifikasipertanggungan->save();
        });

        return redirect()->route('vkp-atasan.index')->with('success', 'Pertanggungan updated successfully');
    }

    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $now = Carbon::now();
            $pertanggungan = Pertanggungan::find($id);
            if ($pertanggungan->verifikasipertanggungan->vkp_a_1 = $request->Input('status') == 'Terverifikasi') {
                $pertanggungan->verifikasipertanggungan->vkp_a_1 = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->vkp = 'Dalam Proses';
                $pertanggungan->verifikasipertanggungan->status = 'Dalam Proses';
            } else {
                $pertanggungan->verifikasipertanggungan->vkp_a_1 = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->status = $request->Input('status');
            }
            $pertanggungan->verifikasipertanggungan->updated_at = $now;
            $pertanggungan->verifikasipertanggungan->id_vkp_a_1 = Auth::user()->id;
            $pertanggungan->verifikasipertanggungan->save();

            $pertanggungan->verifikasipertanggungan->update([
                'vkp_a_1' => $request->Input('status'),
                'status' => $request->Input('status'),
                'id_vkp_a_1' => Auth::user()->id
            ]);

            $idketerangan =  $pertanggungan->verifikasipertanggungan->id;
            $keterangan = KeteranganPertanggungan::find($idketerangan);
            $keterangan->update([
                'keterangan' => $request->Input('keterangan'),
                'updated_at' => $now
            ]);
        });
        return redirect()->route('vkp-atasan.index')
            ->with('success', 'Pertanggungan berhasil diverifikasi');
    }
}
