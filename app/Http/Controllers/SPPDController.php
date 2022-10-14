<?php

namespace App\Http\Controllers;

use App\Models\SPPD;
use App\Models\Kurs;
use App\Models\Rate;
use App\Models\SPPDDetail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class SPPDController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:sppd-list|sppd-create|sppd-edit|sppd-delete|sppd-verifikasi|sppd-insert', ['only' => ['index', 'show']]);
        $this->middleware('permission:sppd-create', ['only' => ['create', 'store', 'insert', 'storee']]);
        $this->middleware('permission:sppd-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:sppd-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $title = 'SPPD';
        $sppd = sppd::all();
        return view('sppd.index', compact('sppd', 'title'));
    }

    public function create()
    {

        $rate = Rate::all();
        $title = 'Nonkasbon';
        $sppd = SPPD::all();
        $dueDate = now()->addDays(30)->format('Y-m-d');
        $kurs = Kurs::all();
        $now = Carbon::now();
        $jamnow = Carbon::now()->format('H:i:s');;
        $thnBulan = Carbon::now()->format('Y-m-d');
        $cek = sppd::count();
        $tglmasuk = Carbon::now()->format('Y-m-d');
        $terakhir = sppd::query()->latest('id')->first();
        if ($cek == 0) {
            $urut = 100001;
            $nomer = 'SPPD' . $thnBulan . '-' . $urut;
            $n0mer = 'D' . $urut;
            $terakhir = '0';
        } else {
            $ambil = sppd::all()->last();
            $urut = (int)substr($ambil->nokasbon, -1) + 1;
            $nomer = 'SPPD' . $thnBulan . '-' . $urut;
            $uru_t = (int)substr($ambil->nokasbon, -1) + 1;
            $n0mer = 'D' . $uru_t;
            $terakhir = $terakhir->no_sppd;
        }
        return view('sppd.create', compact('title', 'rate', 'nomer', 'terakhir', 'kurs', 'tglmasuk', 'dueDate', 'jamnow', 'n0mer', 'sppd'));
    }

    public function store(Request $request)
    {

        DB::transaction(function () use ($request) {

            $dueDate = now()->addDays(30)->format('Y-m-d');
            $kurs = Kurs::all();
            $now = Carbon::now();
            $jamnow = Carbon::now()->format('H:i:s');;
            $thnBulan = Carbon::now()->format('Y-m-d');
            $cek = sppd::count();
            $tglmasuk = Carbon::now()->format('Y-m-d');

            if ($cek == 0) {
                $urut = 100001;
                $nomer = 'SPPD' . $thnBulan . '-' . $urut;
                $n0mer = 'D' . $urut;
                $terakhir = '0';
            } else {
                $ambil = sppd::all()->last();
                $urut = (int)substr($ambil->no_sppd, -1) + 1;
                $nomer = 'SPPD' . $thnBulan . '-' . $urut;
                $uru_t = (int)substr($ambil->no_sppd, -1) + 1;
                $n0mer = 'D' . $uru_t;
                $terakhir = $ambil->no_sppd;
            }
            $sppdID = SPPD::insertGetId([
                'no_sppd' => $nomer,
                'doksebelumnya' => $terakhir,
                'tglmasuk' => $request->Input('tglmasuk'),
                'jumlah' => $request->Input('total')

            ]);

            foreach ($request->nama as $key => $nama) {
                $harga = $request->input('rate');
                // $rates = Rate::where('harga', $harga)->value('id');
                // $rates = json_encode($ratex, true);
                $data = new SPPDDetail();
                $nip = $request->input('nip');
                $departemen = $request->input('departemen');
                $tujuan = $request->input('tujuan');
                $nokontrak = $request->input('nokontrak');
                $kasbondinas = $request->input('kasbondinas');
                $tglberangkat = $request->input('startDate');
                $tglpulang = $request->input('endDate');
                $hari = $request->input('hari');
                $kurs = $request->input('kurs');
                $lumpsum = $request->input('lumpsum');
                $data->id_sppd = $sppdID;
                $data->nama = $nama;
                $data->nip = $nip[$key];
                $data->departemen = $departemen[$key];
                $data->instansi = $tujuan[$key];
                $data->nokontrak = $nokontrak[$key];
                $data->kasbondinas = $kasbondinas[$key];
                $data->tglberangkat = $tglberangkat[$key];
                $data->tglpulang = $tglpulang[$key];
                $data->hari = $hari[$key];
                $data->id_kurs = $kurs[$key];
                $data->id_rate = $harga[$key];
                $data->uanglumpsum = $lumpsum[$key];

                $data->save();
            }
        });

        return redirect()->route('sppd.index')->with('success', 'Non Kasbon created successfully.');
    }

    public function show($id)
    {
        $rate = Rate::all();
        $kurs = Kurs::all();
        $sppd = SPPD::find($id);
        $detail = SPPDDetail::where('id_sppd', $sppd->id)->get();
        $title = 'SPPD | Show';
        return view('sppd.show', compact('title', 'sppd', 'detail', 'rate', 'kurs'));
    }
}
