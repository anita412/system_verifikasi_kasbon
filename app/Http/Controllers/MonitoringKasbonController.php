<?php

namespace App\Http\Controllers;

use App\Exports\mkbExport;
use Illuminate\Http\Request;
use App\Models\Kasbon;

class MonitoringKasbonController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:verifikator', ['only' => ['index', 'store', 'mkbexport', 'create', 'store', 'edit', 'update', 'destroy']]);
    }

    public function index(Request $request)
    {
        $kasbon = Kasbon::all();
        $title = 'Monitoring Kasbon';
        return view('mkb.index', compact('kasbon', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function mkbexport(Request $request)
    {

        $tglawal = $request->reg_start_date;
        $tglakhir = $request->reg_end_date;

        // if ($tglawal and $tglakhir) {
        //     $kasbon = Kasbon::whereBetween('tglmasuk', [$tglawal, $tglakhir])->get();
        // } else {
        //     $kasbon = Kasbon::all();
        // }

        return Excel::download(new mkbExport($tglawal, $tglakhir), 'mkb.xlsx');
        // return view('kasbon.cetak', compact('kasbon'));
    }
}
