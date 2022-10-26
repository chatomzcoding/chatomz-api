<?php

namespace App\Http\Controllers\Informasi;

use App\Http\Controllers\Controller;
use App\Models\Informasisurah;
use Illuminate\Http\Request;

class SurahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surah  = Informasisurah::all();
        return view('api.informasi.surah.index', compact('surah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = file_get_contents('https://al-quran-8d642.firebaseio.com/data.json');
        // foreach (json_decode($data) as $key) {
        //     Informasisurah::create([
        //         'nama' => $key->nama,
        //         'arti' => $key->arti,
        //         'asma' => $key->asma,
        //         'type' => $key->type,
        //         'audio' => $key->audio,
        //         'ayat' => $key->ayat,
        //         'nomor' => $key->nomor,
        //         'rukuk' => $key->rukuk,
        //         'urut' => $key->urut,
        //         'keterangan' => $key->keterangan,
        //     ]);
        // }
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
     * @param  \App\Models\Informasisurah  $informasisurah
     * @return \Illuminate\Http\Response
     */
    public function show(Informasisurah $informasisurah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasisurah  $informasisurah
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasisurah $informasisurah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasisurah  $informasisurah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasisurah $informasisurah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasisurah  $informasisurah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasisurah $informasisurah)
    {
        //
    }
}
