<?php

namespace App\Http\Controllers;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function show()
    {
        $departement = Departement::all();
        return view('admin.departement', ['listDepartement' => $departement]);
    }
}
