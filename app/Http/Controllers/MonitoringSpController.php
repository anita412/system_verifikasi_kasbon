<?php

namespace App\Http\Controllers;

use App\Models\Kasbon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MonitoringSpController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->format('Y-m-d');
        $title = 'Monitoring SP';
        $kasbon = Kasbon::all();
        return view('msp.index', compact('title', 'kasbon', 'now'));
    }
}
