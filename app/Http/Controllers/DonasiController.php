<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function show(){
        $donasi = Donasi::all();
        return view('admin.donasi', ['listDonasi' => $donasi]);
    }
}
