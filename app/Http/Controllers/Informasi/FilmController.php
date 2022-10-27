<?php

namespace App\Http\Controllers\Informasi;

use App\Http\Controllers\Controller;
use App\Models\Informasifilm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film   = Informasifilm::all();

        return view('api.informasi.film.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('informasi')->where('kategori_id',14)->get();
        foreach ($data as $key) {
            Informasifilm::create([
                'nama' => $key->nama,
                'slug' => Str::slug($key->nama),
                'detail' => $key->detail,
                'gambar' => $key->gambar,
            ]);
        }

        return redirect('informasifilm');
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
     * @param  \App\Models\Informasifilm  $informasifilm
     * @return \Illuminate\Http\Response
     */
    public function show(Informasifilm $informasifilm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasifilm  $informasifilm
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasifilm $informasifilm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasifilm  $informasifilm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasifilm $informasifilm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasifilm  $informasifilm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasifilm $informasifilm)
    {
        //
    }
}
