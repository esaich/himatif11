<?php

namespace App\Http\Controllers;


use App\Models\KritikSaran;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{
    public function show()  {
        $kritik = KritikSaran::all(); //select * from  kritiksarans
        return view('admin.kritik_saran', ['listKritikSaran' => $kritik]);
        
    }
    
}
