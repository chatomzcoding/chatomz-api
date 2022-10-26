<?php

namespace App\Http\Controllers\Informasi;

use App\Http\Controllers\Controller;
use App\Models\Informasigunung;
use Illuminate\Http\Request;

class GunungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gunung = Informasigunung::all();

        return view('api.informasi.gunung.index', compact('gunung'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data = file_get_contents('https://indonesia-public-static-api.vercel.app/api/volcanoes');
         $data = json_decode($data);
        //  dd($data);
        foreach ($data as $key) {
            Informasigunung::create([
                'nama' => $key->nama,
                'bentuk' => $key->bentuk,
                'tinggi' => $key->tinggi_meter,
                'letusan_terakhir' => $key->estimasi_letusan_terakhir,
                'geolokasi' => $key->geolokasi,
                'negara' => 'indonesia'
            ]);
        }
        return redirect('informasigunung');
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
     * @param  \App\Models\Informasigunung  $informasigunung
     * @return \Illuminate\Http\Response
     */
    public function show(Informasigunung $informasigunung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasigunung  $informasigunung
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasigunung $informasigunung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasigunung  $informasigunung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasigunung $informasigunung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasigunung  $informasigunung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasigunung $informasigunung)
    {
        //
    }
}
