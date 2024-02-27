<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananPDHController extends Controller
{
    public function show(){
        return view('admin.pemesanan_pdh');
    }
}
