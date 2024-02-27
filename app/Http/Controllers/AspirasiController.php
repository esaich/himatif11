<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function show()  {
        return view('admin.aspirasi');
    }
}
