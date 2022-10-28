<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAbsensiGuruRequest;
use App\Http\Requests\UpdateAbsensiGuruRequest;
use App\Models\AbsensiGuru;

class AbsensiGuruController extends Controller
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
     * @param \App\Http\Requests\StoreAbsensiGuruRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbsensiGuruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\AbsensiGuru $absensiGuru
     * @return \Illuminate\Http\Response
     */
    public function show(AbsensiGuru $absensiGuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\AbsensiGuru $absensiGuru
     * @return \Illuminate\Http\Response
     */
    public function edit(AbsensiGuru $absensiGuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateAbsensiGuruRequest $request
     * @param \App\Models\AbsensiGuru $absensiGuru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbsensiGuruRequest $request, AbsensiGuru $absensiGuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\AbsensiGuru $absensiGuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbsensiGuru $absensiGuru)
    {
        //
    }
}
