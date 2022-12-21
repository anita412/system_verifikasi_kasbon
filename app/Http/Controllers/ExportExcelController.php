<?php

namespace App\Http\Controllers;

use App\Exports\SppdExport;
use App\Exports\mkbExport;
use App\Exports\mkpExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportExcelController extends Controller
{
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

    public function sppdexport(Request $request)
    {

        $tglawal = $request->reg_start_date;
        $tglakhir = $request->reg_end_date;

        // if ($tglawal and $tglakhir) {
        //     $kasbon = Kasbon::whereBetween('tglmasuk', [$tglawal, $tglakhir])->get();
        // } else {
        //     $kasbon = Kasbon::all();
        // }

        return Excel::download(new SppdExport($tglawal, $tglakhir), 'sppd.xlsx');
        // return view('kasbon.cetak', compact('kasbon'));
    }
}
