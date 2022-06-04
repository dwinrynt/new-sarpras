<?php

namespace App\Http\Controllers;

use App\Models\Jeniskoleksi;
use App\Http\Requests\StoreJeniskoleksiRequest;
use App\Http\Requests\UpdateJeniskoleksiRequest;
use App\Models\Kompeten;

class JeniskoleksiController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:view_jenis_koleksis|add_jenis_koleksis|edit_jenis_koleksis|delete_jenis_koleksis', ['only' => ['index','show ']]);
         $this->middleware('permission:add_jenis_koleksis', ['only' => ['create','store']]);
         $this->middleware('permission:edit_jenis_koleksis', ['only' => ['edit','update']]);
         $this->middleware('permission:delete_jenis_koleksis', ['only' => ['destroy']]);
    }

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
     * @param  \App\Http\Requests\StoreJeniskoleksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJeniskoleksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jeniskoleksi  $jeniskoleksi
     * @return \Illuminate\Http\Response
     */
    public function show(Jeniskoleksi $jeniskoleksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jeniskoleksi  $jeniskoleksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeniskoleksi $jeniskoleksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJeniskoleksiRequest  $request
     * @param  \App\Models\Jeniskoleksi  $jeniskoleksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJeniskoleksiRequest $request, Jeniskoleksi $jeniskoleksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jeniskoleksi  $jeniskoleksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jeniskoleksi $jeniskoleksi)
    {
        //
    }
}
