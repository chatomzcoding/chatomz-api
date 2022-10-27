<?php

namespace App\Http\Controllers\Informasi;

use App\Http\Controllers\Controller;
use App\Models\Informasihewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hewan = Informasihewan::all();

        return view('api.informasi.hewan.index', compact('hewan'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasihewan  $informasihewan
     * @return \Illuminate\Http\Response
     */
    public function show(Informasihewan $informasihewan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasihewan  $informasihewan
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasihewan $informasihewan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasihewan  $informasihewan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasihewan $informasihewan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasihewan  $informasihewan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasihewan $informasihewan)
    {
        //
    }
}
