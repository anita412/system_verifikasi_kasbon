<?php

namespace App\Http\Controllers;

use App\Models\DCustomer;
use App\Http\Requests\StoreDCustomerRequest;
use App\Http\Requests\UpdateDCustomerRequest;

class DCustomerController extends Controller
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
     * @param  \App\Http\Requests\StoreDCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DCustomer  $dCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(DCustomer $dCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DCustomer  $dCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(DCustomer $dCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDCustomerRequest  $request
     * @param  \App\Models\DCustomer  $dCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDCustomerRequest $request, DCustomer $dCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DCustomer  $dCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(DCustomer $dCustomer)
    {
        //
    }
}
