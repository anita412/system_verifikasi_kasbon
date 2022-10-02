t<?php

    namespace App\Http\Controllers;

    use App\Models\Dvendor;
    use App\Http\Requests\StoreDvendorRequest;
    use App\Http\Requests\UpdateDvendorRequest;

    class DvendorController extends Controller
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
         * @param  \App\Http\Requests\StoreDvendorRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreDvendorRequest $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Dvendor  $dvendor
         * @return \Illuminate\Http\Response
         */
        public function show(Dvendor $dvendor)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Dvendor  $dvendor
         * @return \Illuminate\Http\Response
         */
        public function edit(Dvendor $dvendor)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdateDvendorRequest  $request
         * @param  \App\Models\Dvendor  $dvendor
         * @return \Illuminate\Http\Response
         */
        public function update(UpdateDvendorRequest $request, Dvendor $dvendor)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Dvendor  $dvendor
         * @return \Illuminate\Http\Response
         */
        public function destroy(Dvendor $dvendor)
        {
            //
        }
    }
