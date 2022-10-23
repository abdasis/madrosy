<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePreferensiRequest;
use App\Http\Requests\UpdatePreferensiRequest;
use App\Models\Commons\Preferensi;

class PreferensiController extends Controller
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
     * @param  \App\Http\Requests\StorePreferensiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePreferensiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commons\Preferensi  $preferensi
     * @return \Illuminate\Http\Response
     */
    public function show(Preferensi $preferensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commons\Preferensi  $preferensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Preferensi $preferensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePreferensiRequest  $request
     * @param  \App\Models\Commons\Preferensi  $preferensi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePreferensiRequest $request, Preferensi $preferensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commons\Preferensi  $preferensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preferensi $preferensi)
    {
        //
    }
}
