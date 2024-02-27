<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function show() {
        $anggota = Anggota::all();
        return view('admin.anggota', ['listAnggota' => $anggota]);
    }
}
