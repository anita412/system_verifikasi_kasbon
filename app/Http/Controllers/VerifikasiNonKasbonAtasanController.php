<?php

namespace App\Http\Controllers;

use App\Models\Nonkasbon;
use App\Models\KeteranganNonKasbon;
use App\Http\Requests\UpdateNonkasbonRequest;
use App\Models\Kurs;
use App\Models\NamaVendor;
use App\Models\Jenis;
use App\Models\Pph;
use App\Models\VerifikasiNonKasbon;
use App\Models\KodeKasbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;

class VerifikasiNonKasbonAtasanController extends Controller
{
    public function index()
    {
        $nonkasbon = nonkasbon::all();
        $title = 'nonkasbon';
        return view('vnk-atasan.index', compact('nonkasbon', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function cek_nonkasbon($id)
    {
        $nonkasbon = nonkasbon::find($id);

        $title = 'Detail';

        return view('vnk-atasan.cek_nonkasbon', compact('title', 'nonkasbon'));
    }

    public function cek_nonkasbon_edit($id)
    {
        $nonkasbon = nonkasbon::find($id);
        $detail = KeteranganNonKasbon::where('id_nonkasbon', $id)->get();

        $title = 'Detail';

        return view('vnk-atasan.cek_nonkasbon_edit', compact('title', 'nonkasbon', 'detail'));
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $nonkasbon = nonkasbon::find($id);
        $now = Carbon::now();
        DB::transaction(function () use ($nonkasbon, $request, $id) {

            foreach ($request->kekurangan as $key => $kekurangan) {
                $data = new KeteranganNonKasbon();
                $data->id_nonkasbon = $id;
                $data->keterangan = $kekurangan;
                $data->save();
            }

            if ($nonkasbon->verifikasinonkasbon->vnk_a_1 = $request->Input('status') == 'Terverifikasi') {
                $nonkasbon->verifikasinonkasbon->vnk_a_1 = $request->Input('status');
                $nonkasbon->verifikasinonkasbon->vnk = 'Dalam Proses';
                $nonkasbon->verifikasinonkasbon->status = 'Dalam Proses';
            } else {
                $nonkasbon->verifikasinonkasbon->vnk_a_1 = $request->Input('status');
                $nonkasbon->verifikasinonkasbon->status = $request->Input('status');
            }

            $nonkasbon->verifikasinonkasbon->id_vnk_a_1 = Auth::user()->id;
            $nonkasbon->verifikasinonkasbon->save();
        });

        return redirect()->route('vnk-atasan.index')
            ->with('success', 'nonkasbon berhasil diverifikasi');
    }

    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {

            $nonkasbon = nonkasbon::find($id);
            if ($nonkasbon->verifikasinonkasbon->vnk_a_1 = $request->Input('status') == 'Terverifikasi') {
                $nonkasbon->verifikasinonkasbon->vnk = 'Dalam Proses';
                $nonkasbon->verifikasinonkasbon->status = 'Dalam Proses';
                $nonkasbon->verifikasinonkasbon->vnk_a_1 = $request->Input('status');
            } else {
                $nonkasbon->verifikasinonkasbon->vnk_a_1 = $request->Input('status');
            }
            $nonkasbon->verifikasinonkasbon->update([
                'vnk_a_1' => $request->Input('status'),
                'status' => $request->Input('status'),
                'id_vnk_a_1' => Auth::user()->id
            ]);

            Keterangannonkasbon::where('id_nonkasbon', $id)->delete();
            $data = $request->all();
            if ($request->kekurangan) {
                foreach ($data['kekurangan'] as $item => $value) {
                    $data2 = array(
                        'id_nonkasbon' => $id,
                        'keterangan' => $data['kekurangan'][$item],
                    );
                    Keterangannonkasbon::create($data2);
                }
            }
        });
        return redirect()->route('vnk-atasan.index')->with('success', 'User updated successfully');
    }
}
