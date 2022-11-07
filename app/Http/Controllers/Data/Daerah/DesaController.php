<?php

namespace App\Http\Controllers\Data\Daerah;

use App\Http\Controllers\Controller;
use App\Models\Datadesa;
use App\Models\Dataprovinsi;
use Illuminate\Http\Request;

class DesaController extends Controller
{
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
        // $data = file_get_contents('http://dev.farizdotid.com/api/daerahindonesia/provinsi');
        // $data = json_decode($data);
        $data = Dataprovinsi::where('id','>',74)->get();
        // dd($data);
        foreach ($data as $key) {
            // $dataprov = file_get_contents('http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='.$key->id);
            // $dataprov = json_decode($dataprov);
            $kota = $key->datakota;
            // dd($kota);
            foreach ($kota as $item) {
                // $datakota = file_get_contents('http://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota='.$item->id);
                // $datakota = json_decode($datakota);
                // dd($item->datakecamatan);
                foreach ($item->datakecamatan as $i) {
                    $datakec = file_get_contents('http://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan='.$i->id);
                    $datakec = json_decode($datakec);
                    foreach ($datakec->kelurahan as $j) {
                        $cekdesa = Datadesa::find($j->id);
                        if (!$cekdesa) {
                            Datadesa::create([
                                'id' => $j->id,
                                'datakecamatan_id' => $i->id,
                                'nama' => $j->nama,
                            ]);
                        }
                    }
                }
            }
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
     * @param  \App\Models\Datadesa  $datadesa
     * @return \Illuminate\Http\Response
     */
    public function show(Datadesa $datadesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datadesa  $datadesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Datadesa $datadesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datadesa  $datadesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datadesa $datadesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datadesa  $datadesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datadesa $datadesa)
    {
        //
    }
}
