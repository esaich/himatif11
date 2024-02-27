<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SilaturahmiMhsController extends Controller
{
    public function show() {
        return view('admin.silaturahmi_mahasiswa');
    }
}
