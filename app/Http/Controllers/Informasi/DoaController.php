<?php

namespace App\Http\Controllers\Informasi;

use App\Http\Controllers\Controller;
use App\Models\Informasidoa;
use Illuminate\Http\Request;

class DoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doa = Informasidoa::all();

        return view('api.informasi.doa.index', compact('doa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  $data = file_get_contents('https://doa-doa-api-ahmadramadhan.fly.dev/api');
        //  $data = json_decode($data);
        // foreach ($data as $key) {
        //     Informasidoa::create([
        //         'nama' => $key->doa,
        //         'ayat' => $key->ayat,
        //         'latin' => $key->latin,
        //         'arti' => $key->artinya,
        //     ]);
        // }

        // return redirect('informasidoa');
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
     * @param  \App\Models\Informasidoa  $informasidoa
     * @return \Illuminate\Http\Response
     */
    public function show(Informasidoa $informasidoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasidoa  $informasidoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasidoa $informasidoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasidoa  $informasidoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasidoa $informasidoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasidoa  $informasidoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasidoa $informasidoa)
    {
        //
    }
}
