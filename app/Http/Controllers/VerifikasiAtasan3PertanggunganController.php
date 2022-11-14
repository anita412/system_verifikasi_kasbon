<?php

namespace App\Http\Controllers;

use App\Models\Pertanggungan;
use DB;
use Carbon\Carbon;
use App\Models\Keterangan_detail;
use App\Models\KeteranganPertanggungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikasiAtasan3PertanggunganController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:vkp-atasan-3-list|vkp-atasan-3-create|vkp-atasan-3-edit|vkp-atasan-3-delete|vkp-atasan-3-kelengkapan', ['only' => ['index', 'store']]);
        $this->middleware('permission:vkp-atasan-3-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:vkp-atasan-3-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:vkp-atasan-3-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $title = 'Pertanggungan';
        $pertanggungan = Pertanggungan::all();
        return view('vkp-atasan-3.index', compact('pertanggungan', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function cek_pertanggungan($id)
    {
        $pertanggungan = Pertanggungan::find($id);
        $title = 'Detail';
        return view('vkp-atasan-3.cek_pertanggungan', compact('title', 'pertanggungan'));
    }
    public function cek_pertanggungan_edit($id)
    {
        $pertanggungan = Pertanggungan::find($id);
        $detail = Keterangan_detail::where('id_keterangan', $pertanggungan->kasbon->kelengkapan->keterangan->id)->get();
        $title = 'Detail';
        return view('vkp-atasan-3.cek_pertanggungan_edit', compact('title', 'pertanggungan', 'detail'));
    }
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $now = Carbon::now();
            $pertanggungan = pertanggungan::find($id);

            $idketerangan =  $pertanggungan->verifikasipertanggungan->id;
            $keterangan = KeteranganPertanggungan::find($idketerangan);
            $keterangan->update([
                'keterangan' => $request->Input('keterangan'),
                'updated_at' => $now
            ]);

            if ($pertanggungan->verifikasipertanggungan->vkp_a_3 = $request->Input('status') == 'Terverifikasi') {
                $pertanggungan->verifikasipertanggungan->vkp_a_3 = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->status = $request->Input('status');
            } elseif ($pertanggungan->verifikasipertanggungan->vkp_a_3 = $request->Input('status') == 'Ditolak') {
                $pertanggungan->verifikasipertanggungan->vkp_a_3 = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->status = $request->Input('status');
            } else {
                $pertanggungan->verifikasipertanggungan->vkp_a_3 = $request->Input('status');
                $pertanggungan->verifikasipertanggungan->status =  $request->Input('status');
            }
            $now = Carbon::now();
            $pertanggungan->verifikasipertanggungan->updated_at = $now;
            $pertanggungan->verifikasipertanggungan->id_vkp_a_3 = Auth::user()->id;
            $pertanggungan->verifikasipertanggungan->save();
        });
        return redirect()->route('vkp-atasan-3.index')->with('success', 'Pertanggungan updated successfully');
    }
}
