<?php

namespace App\Http\Controllers;

use App\Models\Kasbon;
use Illuminate\Http\Request;

class MonitoringSpController extends Controller
{
    public function index()
    {
        $title = 'Monitoring SP';
        $kasbon = Kasbon::all();
        return view('msp.index', compact('title', 'kasbon'));
    }
}
