<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemberdayaanWanita;

class PemberdayaanWanitaController extends Controller
{
    public function show(){
        $pemberdayaan_wanita = PemberdayaanWanita::all();
        return view('admin.pemberdayaan_wanita',['listPemberdayaanWanita' => $pemberdayaan_wanita]);
    }
}
