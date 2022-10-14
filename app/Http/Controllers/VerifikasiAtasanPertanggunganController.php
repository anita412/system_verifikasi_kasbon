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

            foreach ($request->kekurangan as $key => $kekurangan) {
                $data = new KeteranganPertanggungan();
                $data->id_pertanggungan = $id;
                $data->keterangan = $kekurangan;
                $data->save();
            }

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

        return redirect()->route('vkp-atasan.index')
            ->with('success', 'Pertanggungan berhasil diverifikasi');
    }
}
