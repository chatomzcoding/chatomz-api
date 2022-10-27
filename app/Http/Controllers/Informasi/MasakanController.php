<?php

namespace App\Http\Controllers\Informasi;

use App\Http\Controllers\Controller;
use App\Models\Informasimasakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masakan    = Informasimasakan::all();

        return view('api.informasi.masakan.index', compact('masakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = DB::table('informasi')->where('kategori_id',15)->get();
        // dd($data);
        // foreach ($data as $key) {
        //     Informasimasakan::create([
        //         'nama' => $key->nama,
        //         'slug' => $key->slug,
        //         'gambar' => $key->gambar,
        //         'detail' => $key->detail,
        //     ]);
        // }

        // return redirect('informasimasakan');
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
     * @param  \App\Models\Informasimasakan  $informasimasakan
     * @return \Illuminate\Http\Response
     */
    public function show(Informasimasakan $informasimasakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasimasakan  $informasimasakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasimasakan $informasimasakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasimasakan  $informasimasakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasimasakan $informasimasakan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasimasakan  $informasimasakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasimasakan $informasimasakan)
    {
        //
    }
}
