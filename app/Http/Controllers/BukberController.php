<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukberController extends Controller
{
    public function show(){
        $bukber = Bukber::all();
        return view('admin.bukber',['listBukber' => $bukber]);
    }
}
