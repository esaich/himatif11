<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    public function show(){
        return view('admin.dokumentasi');
    }
}
