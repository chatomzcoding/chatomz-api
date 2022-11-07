<?php

namespace App\Http\Controllers\Api\Data;

use App\Http\Controllers\Controller;
use App\Models\Datadesa;
use App\Models\Datakecamatan;
use App\Models\Datakota;
use App\Models\Dataprovinsi;
use Illuminate\Http\Request;

class DaerahindonesiaController extends Controller
{
    public function index($sesi)
    {
        $result = [
            'error' => 1
        ];
        switch ($sesi) {
            case 'provinsi':
                if (isset($_GET['id'])) {
                    $result = Dataprovinsi::select('id','nama')->find($_GET['id']);
                } else {
                    $result = [
                        'provinsi' => Dataprovinsi::all(['id','nama'])
                    ];
                }
                
                break;
            case 'kota':
                if (isset($_GET['id_provinsi'])) {
                    $result = [ 
                        'kota_kabupaten' => Datakota::where('dataprovinsi_id',$_GET['id_provinsi'])->get(['id','nama'])
                    ];
                }

                if (isset($_GET['id'])) {
                    $result = Datakota::select('id','nama')->find($_GET['id']);
                }
                
                break;

            case 'kecamatan':
                if (isset($_GET['id_kota'])) {
                    $result = [ 
                        'kecamatan' => Datakecamatan::where('datakota_id',$_GET['id_kota'])->get(['id','nama'])
                    ];
                }

                if (isset($_GET['id'])) {
                    $result = Datakecamatan::select('id','nama')->find($_GET['id']);
                }
                
                break;
            case 'desa':
                if (isset($_GET['id_kecamatan'])) {
                    $result = [ 
                        'desa_kelurahan' => Datadesa::where('datakecamatan_id',$_GET['id_kecamatan'])->get(['id','nama'])
                    ];
                }

                if (isset($_GET['id'])) {
                    $result = Datadesa::select('id','nama')->find($_GET['id']);
                }
                
                break;
            
            default:
                # code...
                break;
        }

        return $result;
    }
}
