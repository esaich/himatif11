<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HimatifMudaController extends Controller
{
    public function show(){
        return view('admin.himatif_muda');
    }
}
