<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Informasidoa;
use App\Models\Informasifilm;
use App\Models\Informasigunung;
use App\Models\Informasihewan;
use App\Models\Informasimasakan;
use App\Models\Informasiphone;
use App\Models\Informasisurah;
use Illuminate\Http\Request;

class GetinformasiController extends Controller
{
    public function index($sesi)
    {
        if (isset($_GET['token'])) {
            if (cekToken($_GET['token'])) {
                $image_url = '';
                switch ($sesi) {
                    case 'surah':
                        $result = Informasisurah::all();
                        if (isset($_GET['id'])) {
                            $result = Informasisurah::find($_GET['id']);
                        }

                        if (isset($_GET['cari'])) {
                            $result = Informasisurah::where('nama','LIKE','%'.$_GET['cari'].'%')->get();
                        }
                        
                        break;
                   
                    case 'doa':
                        $result = Informasidoa::all();
                        if (isset($_GET['id'])) {
                            $result = Informasidoa::find($_GET['id']);
                        }

                        if (isset($_GET['cari'])) {
                            $result = Informasidoa::where('nama','LIKE','%'.$_GET['cari'].'%')->get();
                        }
                        
                        break;

                    case 'gunung':
                        $result = Informasigunung::all();
                        if (isset($_GET['id'])) {
                            $result = Informasigunung::find($_GET['id']);
                        }
                        if (isset($_GET['cari'])) {
                            $result = Informasigunung::where('nama','LIKE','%'.$_GET['cari'].'%')->get();
                        }
                        
                        break;

                    case 'hewan':
                        $image_url = asset('img/informasi/hewan/');
                        $result = Informasihewan::all();
                        if (isset($_GET['id'])) {
                            $result = Informasihewan::find($_GET['id']);
                        }
                        if (isset($_GET['cari'])) {
                            $result = Informasihewan::where('nama','LIKE','%'.$_GET['cari'].'%')->get();
                        }
                        
                        break;
                    
                    case 'film':
                        $image_url = asset('img/informasi/film/');
                        $result = Informasifilm::all();
                        if (isset($_GET['id'])) {
                            $result = Informasifilm::find($_GET['id']);
                        }
                        if (isset($_GET['cari'])) {
                            $result = Informasifilm::where('nama','LIKE','%'.$_GET['cari'].'%')->get();
                        }
                        
                        break;

                    case 'masakan':
                        $image_url = asset('img/informasi/masakan/');
                        $result = Informasimasakan::all();
                        if (isset($_GET['id'])) {
                            $result = Informasimasakan::find($_GET['id']);
                        }
                        if (isset($_GET['cari'])) {
                            $result = Informasimasakan::where('nama','LIKE','%'.$_GET['cari'].'%')->get();
                        }
                        
                        break;
                        
                    case 'phone':
                        $image_url = asset('img/informasi/phone/');
                        $result = Informasiphone::all();
                        if (isset($_GET['id'])) {
                            $result = Informasiphone::find($_GET['id']);
                        }
                        if (isset($_GET['cari'])) {
                            $result = Informasiphone::where('nama','LIKE','%'.$_GET['cari'].'%')->get();
                        }
                        
                        break;
                        
                    default:
                        return response()->json([
                            'code' => '00',
                            'message' => 'tidak ada data yang dipilih'
                        ]);
                        break;
                }
                $total = count($result);
                return [
                    'image_url' => $image_url,
                    'total' => $total,
                    'data' => $result
                ];
            }
        }

        // jika tidak lolos verifikasi maka akan muncul pesan dibawah ini
        return response()->json([
            'code' => '404',
            'message' => 'tidak ditemukan'
        ]);
    }

    public function listinformasi()
    {
        if (isset($_GET['token'])) {
            if (cekToken($_GET['token'])) {
                $informasi = dataInformasi();
                if (isset($_GET['id'])) {
                    $informasi = $informasi[$_GET['id']];
                }
                return $informasi;
            }
        }
        return response()->json([
            'code' => '404',
            'message' => 'tidak ditemukan'
        ]);
    }
}
