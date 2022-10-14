<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:unit-list|unit-create|unit-edit|unit-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:unit-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:unit-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:unit-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $title = 'Unit';
        $unit = Unit::latest()->paginate();
        return view('units.index', compact('unit', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        $title = 'Input';
        return view('units.create', compact('units', 'title'));
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
        ]);
        
        $unit = Unit::create(['name' => $request->input('name')]);

        return redirect()->route('units.index')
            ->with('success', 'unit created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit = unit::find($id);
        return view('units.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = unit::find($id);
        $units = Unit::all();
        $title = 'Edit';

        return view('units.edit', compact('unit', 'title', 'units'));
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
            'roles' => 'required'
        ]);

        $input = $request->all();

        $unit = unit::find($id);
        $unit->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $unit->assignRole($request->input('roles'));

        return redirect()->route('units.index')
            ->with('success', 'unit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        unit::find($id)->delete();
        return redirect()->route('units.index')
            ->with('success', 'unit deleted successfully');
    }
}
