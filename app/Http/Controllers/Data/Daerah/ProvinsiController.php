<?php

namespace App\Http\Controllers\Data\Daerah;

use App\Http\Controllers\Controller;
use App\Models\Dataprovinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dataprovinsi::all();
        return view('api.data.daerah.provinsi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = file_get_contents('http://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $data = json_decode($data);
        // dd($data);
        foreach ($data->provinsi as $key) {
            Dataprovinsi::create([
                'id' => $key->id,
                'nama' => $key->nama,
            ]);
        }

        return redirect('dataprovinsi');
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
     * @param  \App\Models\Dataprovinsi  $dataprovinsi
     * @return \Illuminate\Http\Response
     */
    public function show(Dataprovinsi $dataprovinsi)
    {
        return view('api.data.daerah.provinsi.show', compact('dataprovinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataprovinsi  $dataprovinsi
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataprovinsi $dataprovinsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataprovinsi  $dataprovinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataprovinsi $dataprovinsi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataprovinsi  $dataprovinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataprovinsi $dataprovinsi)
    {
        //
    }
}
