<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function show() 
    {
        $aspirasi = Aspirasi::all();
        return view('admin.aspirasi',['listAspirasi' => $aspirasi]);
    }
}
