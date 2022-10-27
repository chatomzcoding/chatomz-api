<?php

namespace App\Http\Controllers\Informasi;

use App\Http\Controllers\Controller;
use App\Models\Informasihewan;
use App\Models\Informasihewanlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        // $hewan = DB::table('informasi')->where('kategori_id',3)->get();
        // foreach ($hewan as $key) {
        //     $detail     = json_decode($key->detail);
        //     Informasihewan::create([
        //         'nama' => $key->nama,
        //         'nama_latin' => $detail->nama_latin,
        //         'slug' => Str::slug($key->nama),
        //         'gambar' => $key->gambar,
        //         'keterangan' => $detail->tentang,
        //     ]);
        // }

        // return redirect('informasihewan');
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
        // $hewan = DB::table('informasi')->where('kategori_id',3)->get();
        // foreach ($hewan as $key) {
        //     $sub = DB::table('informasi_sub')->where('informasi_id',$key->id)->get();
        //     foreach ($sub as $item) {
        //         $detail    = json_decode($item->detail_sub);
        //         $hewan      = Informasihewan::where('nama',$key->nama)->first();
        //         Informasihewanlist::create([
        //             'informasihewan_id' => $hewan->id,
        //             'nama' => $item->nama_sub,
        //             'nama_latin' => $detail->nama_latin,
        //             'slug' => Str::slug($item->nama_sub),
        //             'gambar' => $item->gambar_sub,
        //             'keterangan' => $detail->tentang,
        //         ]);
        //     }
        // }

        return view('api.informasi.hewan.show', compact('informasihewan'));

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
