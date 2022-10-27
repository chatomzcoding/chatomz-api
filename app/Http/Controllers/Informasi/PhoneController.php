<?php

namespace App\Http\Controllers\Informasi;

use App\Http\Controllers\Controller;
use App\Models\Informasiphone;
use App\Models\Informasiphonevarian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phone = Informasiphone::all();

        return view('api.informasi.phone.index', compact('phone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  $data = DB::table('informasi')->where('kategori_id',30)->get();
        // foreach ($data as $key) {
        //     $detail     = json_decode($key->detail);
        //     Informasiphone::create([
        //         'nama' => $key->nama,
        //         'slug' => $key->slug,
        //         'gambar' => $key->gambar,
        //         'total_varian' => $detail->jumlah,
        //     ]);
        // }

        // return redirect('informasiphone');
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
     * @param  \App\Models\Informasiphone  $informasiphone
     * @return \Illuminate\Http\Response
     */
    public function show(Informasiphone $informasiphone)
    {
        $data = DB::table('informasi')->where('kategori_id',30)->get();
        foreach ($data as $key) {
            $sub = DB::table('informasi_sub')->where('informasi_id',$key->id)->get();
            foreach ($sub as $item) {
                $phone      = Informasiphone::where('nama',$key->nama)->first();
                Informasiphonevarian::create([
                    'informasiphone_id' => $phone->id,
                    'nama' => $item->nama_sub,
                    'slug' => $item->slug,
                    'gambar' => $item->gambar_sub,
                    'detail' => $item->detail_sub,
                ]);
            }
        }

        return view('api.informasi.phone.show', compact('informasiphone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasiphone  $informasiphone
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasiphone $informasiphone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasiphone  $informasiphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasiphone $informasiphone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasiphone  $informasiphone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasiphone $informasiphone)
    {
        //
    }
}
