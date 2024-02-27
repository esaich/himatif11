<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemberdayaanWanitaController extends Controller
{
    public function show(){
        return view('admin.pemberdayaan_wanita');
    }
}
