<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecrutmentController extends Controller
{
    public function show(){
        return view('admin.recrutment');
    }
}
