<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function informasi()
    {
        $informasi = [
            [
                'link' => 'informasisurah',
                'nama' => 'Surah Al-quran',
                'gambar' => 'alquran.png',
                'keterangan' => 'Daftar Surah dalam Kitab Al-Qur\'an',
                'kategori' => 'ISLAM'
            ],
            [
                'link' => 'informasidoa',
                'nama' => 'Doa - doa',
                'gambar' => 'doa.jpg',
                'keterangan' => 'Kumpulan Doa-doa sehari - hari',
                'kategori' => 'ISLAM',
            ],
            [
                'link' => 'informasigunung',
                'nama' => 'Gunung',
                'gambar' => 'gunung.jpg',
                'keterangan' => 'Daftar Gunung',
                'kategori' => 'PENGETAHUAN',
            ],
            [
                'link' => 'informasihewan',
                'nama' => 'Dunia Hewan',
                'gambar' => 'hewan.jpg',
                'keterangan' => 'Daftar Hewan',
                'kategori' => 'PENGETAHUAN',
            ]
        ];
        return view('api.informasi.index', compact('informasi'));
    }
}
