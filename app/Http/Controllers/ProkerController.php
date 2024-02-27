<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Routing\Controller;

class ProkerController extends Controller
{
    public function show():View
    {
        $proker = Proker::all();
        return view('admin.proker', ['listProker' => $proker]);

    }
}
