<?php 

function dataInformasi()
{
    $informasi = [
        1 => [
            'link' => 'informasisurah',
            'nama' => 'Surah Al-quran',
            'gambar' => asset('img/informasi/alquran.png'),
            'keterangan' => 'Daftar Surah dalam Kitab Al-Qur\'an',
            'kategori' => 'ISLAM',
            'label' => 'surah'
        ],
        2 => [
            'link' => 'informasidoa',
            'nama' => 'Doa - doa',
            'gambar' => asset('img/informasi/doa.jpg'),
            'keterangan' => 'Kumpulan Doa-doa sehari - hari',
            'kategori' => 'ISLAM',
            'label' => 'doa'
        ],
        3 => [
            'link' => 'informasigunung',
            'nama' => 'Gunung',
            'gambar' => asset('img/informasi/gunung.jpg'),
            'keterangan' => 'Daftar Gunung',
            'kategori' => 'PENGETAHUAN',
            'label' => 'gunung'
        ],
        4 => [
            'link' => 'informasihewan',
            'nama' => 'Dunia Hewan',
            'gambar' => asset('img/informasi/hewan.jpg'),
            'keterangan' => 'Daftar Hewan',
            'kategori' => 'PENGETAHUAN',
            'label' => 'hewan'
        ],
        5 => [
            'link' => 'informasifilm',
            'nama' => 'Dunia Film',
            'gambar' => asset('img/informasi/film.jpg'),
            'keterangan' => 'Daftar Film',
            'kategori' => 'HIBURAN',
            'label' => 'film'
        ],
        6 => [
            'link' => 'informasimasakan',
            'nama' => 'Resep Masakan',
            'gambar' => asset('img/informasi/masakan.jpeg'),
            'keterangan' => 'Daftar Resep Masakan',
            'kategori' => 'KEHIDUPAN',
            'label' => 'masakan'
        ],
        7 => [
            'link' => 'informasiphone',
            'nama' => 'Phone',
            'gambar' => asset('img/informasi/phone.png'),
            'keterangan' => 'Daftar Merk Phone',
            'kategori' => 'KEHIDUPAN',
            'label' => 'phone'
        ]
    ];

    return $informasi;
}