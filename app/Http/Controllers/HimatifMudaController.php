<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HimatifMudaController extends Controller
{
    public function show(){
        $himatif_muda = HimatifMuda::all();
        return view('admin.himatif_muda',['listHimatifMuda' => $himatif_muda]);
    }
}
