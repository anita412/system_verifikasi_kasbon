<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = User::all();
        $title = 'View Profile';
        return view('profile.index', compact('user', 'title'));
    }
}
