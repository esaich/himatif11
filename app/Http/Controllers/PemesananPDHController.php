<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananPDHController extends Controller
{
    public function show(){
        $pemesanan_pdh = PemesananPDH::all();
        return view('admin.pemesanan_pdh',['listPemesananPDH' => $pemesanan_pdh]);
    }
}
