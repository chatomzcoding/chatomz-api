<?php

namespace App\Http\Controllers\Data\Daerah;

use App\Http\Controllers\Controller;
use App\Models\Datakota;
use Illuminate\Http\Request;

class KotaController extends Controller
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
                $cekkota = Datakota::find($item->id);
                if (!$cekkota) {
                    Datakota::create([
                        'id' => $item->id,
                        'dataprovinsi_id' => $key->id,
                        'nama' => $item->nama,
                    ]);
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
     * @param  \App\Models\Datakota  $datakota
     * @return \Illuminate\Http\Response
     */
    public function show($datakota)
    {
        $datakota = Datakota::find($datakota);
        
        return view('api.data.daerah.kota.show', compact('datakota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datakota  $datakota
     * @return \Illuminate\Http\Response
     */
    public function edit(Datakota $datakota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datakota  $datakota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datakota $datakota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datakota  $datakota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datakota $datakota)
    {
        //
    }
}
