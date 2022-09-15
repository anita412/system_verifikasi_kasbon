<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Unit;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        return view('users.index', [
            'user' => User::orderBy('id', 'DESC')->paginate(5),
            'unit' => Unit::all(),
            'title' => 'Index',
        ])->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        $roles = Role::pluck('name', 'name')->all();
        $title = 'Input';
        return view('users.create', compact('roles', 'units', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'nip' => 'required',
            'id_unit' => 'required',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $units = Unit::all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        $title = 'Edit';

        return view('users.edit', compact('user', 'roles', 'userRole', 'title', 'units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'roles' => 'required'
        ]);

        $input = $request->all();

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
    public function list()
    {
        $var_nama = 'List';
        return view('users.list-kasbon', compact('var_nama'));
    }
    // public function ajuan()
    // {
    //     $var_nama = 'Ajuan Kasbon';
    //     return view('User.ajuan-kasbon', compact('var_nama'));
    // }
    // public function rencana()
    // {
    //     $var_nama = 'Rencana';
    //     return view('User.entry-rencana', compact('var_nama'));
    // }
    public function rencana1()
    {
        $var_nama = 'Rencana1';
        return view('users.entry-rencana1', compact('var_nama'));
    }
    public function rencana2()
    {
        $var_nama = 'Rencana2';
        return view('users.entry-rencana2', compact('var_nama'));
    }
    public function rencana3()
    {
        $var_nama = 'Rencana3';
        return view('users.entry-rencana3', compact('var_nama'));
    }
    public function nonkasbon()
    {
        $var_nama = 'Non Kasbon';
        return view('users.entry-nonkasbon', compact('var_nama'));
    }
    public function bayarbeli()
    {
        $var_nama = 'Bayar Beli';
        return view('users.entry-bayarbeli', compact('var_nama'));
    }
    public function pertanggungan1()
    {
        $var_nama = 'Entry Pertanggungan1';
        return view('users.entry-pertanggungan1', compact('var_nama'));
    }
    public function pertanggungan2()
    {
        $var_nama = 'Entry Pertanggungan2';
        return view('users.entry-pertanggungan2', compact('var_nama'));
    }
    public function sppd()
    {
        $var_nama = 'Entry sppd';
        return view('users.entry-sppd', compact('var_nama'));
    }
}