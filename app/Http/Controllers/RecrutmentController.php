<?php

namespace App\Http\Controllers;

use App\Models\Recrutment;
use Illuminate\Http\Request;

class RecrutmentController extends Controller
{
    public function show(){
        $recrutment = Recrutment::all();
        return view('admin.recrutment',['listRecrutment' => $recrutment]);
    }
}
