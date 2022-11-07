<?php

namespace App\Http\Controllers\Data\Daerah;

use App\Http\Controllers\Controller;
use App\Models\Datakecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
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
        $data = file_get_contents('http://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $data = json_decode($data);
        // dd($data);
        foreach ($data->provinsi as $key) {
            $dataprov = file_get_contents('http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='.$key->id);
            $dataprov = json_decode($dataprov);
            foreach ($dataprov->kota_kabupaten as $item) {
                $datakota = file_get_contents('http://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota='.$item->id);
                $datakota = json_decode($datakota);
                foreach ($datakota->kecamatan as $i) {
                    $cekkecamatan = Datakecamatan::find($i->id);
                    if (!$cekkecamatan) {
                        Datakecamatan::create([
                            'id' => $i->id,
                            'datakota_id' => $item->id,
                            'nama' => $i->nama,
                        ]);
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
     * @param  \App\Models\Datakecamatan  $datakecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Datakecamatan $datakecamatan)
    {
        return view('api.data.daerah.kecamatan.show', compact('datakecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datakecamatan  $datakecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Datakecamatan $datakecamatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datakecamatan  $datakecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datakecamatan $datakecamatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datakecamatan  $datakecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datakecamatan $datakecamatan)
    {
        //
    }
}
