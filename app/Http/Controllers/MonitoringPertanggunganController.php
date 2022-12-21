<?php

namespace App\Http\Controllers;

use App\Exports\mkpExport;
use Illuminate\Http\Request;
use App\Models\Pertanggungan;

class MonitoringPertanggunganController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:verifikator', ['only' => ['index', 'store', 'create', 'store','mkpexport', 'edit', 'update', 'destroy']]);
    }

    public function index(Request $request)
    {
        $pertanggungan = Pertanggungan::all();
        $title = 'Monitoring Pertanggungan';
        return view('mkp.index', compact('pertanggungan', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function mkpexport(Request $request)
    {

        $tglawal = $request->reg_start_date;
        $tglakhir = $request->reg_end_date;

        // if ($tglawal and $tglakhir) {
        //     $kasbon = Kasbon::whereBetween('tglmasuk', [$tglawal, $tglakhir])->get();
        // } else {
        //     $kasbon = Kasbon::all();
        // }

        return Excel::download(new mkpExport($tglawal, $tglakhir), 'mkp.xlsx');
        
        // return view('kasbon.cetak', compact('kasbon'));
    }
}
