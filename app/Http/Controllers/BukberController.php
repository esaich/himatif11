<?php

namespace App\Http\Controllers;

use App\Models\Bukber;
use Illuminate\Http\Request;

class BukberController extends Controller
{
    public function show(){
        $bukber = Bukber::all();
        return view('admin.bukber',['listBukber' => $bukber]);
    }
}
