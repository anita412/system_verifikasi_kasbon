<?php

namespace App\Http\Controllers;

use App\Models\DPajak;
use App\Http\Requests\StoreDPajakRequest;
use App\Http\Requests\UpdateDPajakRequest;

class DPajakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDPajakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDPajakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DPajak  $dPajak
     * @return \Illuminate\Http\Response
     */
    public function show(DPajak $dPajak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DPajak  $dPajak
     * @return \Illuminate\Http\Response
     */
    public function edit(DPajak $dPajak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDPajakRequest  $request
     * @param  \App\Models\DPajak  $dPajak
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDPajakRequest $request, DPajak $dPajak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DPajak  $dPajak
     * @return \Illuminate\Http\Response
     */
    public function destroy(DPajak $dPajak)
    {
        //
    }
}
