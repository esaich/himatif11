<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SilaturahmiMhs;

class SilaturahmiMhsController extends Controller
{
    public function show() {
        $silaturahmi_mahasiswa = SilaturahmiMhs::all();
        return view('admin.silaturahmi_mahasiswa',['listSilaturahmiMhs' => $silaturahmi_mahasiswa]);
    }
}
