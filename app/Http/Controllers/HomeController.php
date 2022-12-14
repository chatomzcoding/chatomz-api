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
        $informasi = dataInformasi();
        return view('api.informasi.index', compact('informasi'));
    }

    public function data()
    {
        $data = dataPusat();
        return view('api.data.index', compact('data'));
    }
}
