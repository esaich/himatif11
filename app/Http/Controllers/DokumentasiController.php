<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    public function show(){
        $dokumentasi = Dokumentasi::all();
        return view('admin.dokumentasi',['listDokumentasi' => $dokumentasi]);
    }
}
