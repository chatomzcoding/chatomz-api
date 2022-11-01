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
                        if (isset($_GET['id'])) {
                            $result = Informasisurah::find($_GET['id']);
                        } else {
                            $result = Informasisurah::all();
                        }
                        
                        break;
                   
                    case 'doa':
                        if (isset($_GET['id'])) {
                            $result = Informasidoa::find($_GET['id']);
                        } else {
                            $result = Informasidoa::all();
                        }
                        
                        break;

                    case 'gunung':
                        if (isset($_GET['id'])) {
                            $result = Informasigunung::find($_GET['id']);
                        } else {
                            $result = Informasigunung::all();
                        }
                        
                        break;

                    case 'hewan':
                        $image_url = asset('img/informasi/hewan/');
                        if (isset($_GET['id'])) {
                            $result = Informasihewan::find($_GET['id']);
                        } else {
                            $result = Informasihewan::all();
                        }
                        
                        break;
                    
                    case 'film':
                        $image_url = asset('img/informasi/film/');
                        if (isset($_GET['id'])) {
                            $result = Informasifilm::find($_GET['id']);
                        } else {
                            $result = Informasifilm::all();
                        }
                        
                        break;

                    case 'masakan':
                        $image_url = asset('img/informasi/masakan/');
                        if (isset($_GET['id'])) {
                            $result = Informasimasakan::find($_GET['id']);
                        } else {
                            $result = Informasimasakan::all();
                        }
                        
                        break;
                        
                    case 'phone':
                        $image_url = asset('img/informasi/phone/');
                        if (isset($_GET['id'])) {
                            $result = Informasiphone::find($_GET['id']);
                        } else {
                            $result = Informasiphone::all();
                        }
                        
                        break;
                        
                    default:
                        return response()->json([
                            'code' => '00',
                            'message' => 'tidak ada data yang dipilih'
                        ]);
                        break;
                }
                return [
                    'image_url' => $image_url,
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
}
