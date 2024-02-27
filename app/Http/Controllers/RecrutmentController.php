<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecrutmentController extends Controller
{
    public function show(){
        $recrutment = Recrutment::all();
        return view('admin.recrutment',['listRecrutment' => $recrutment]);
    }
}
