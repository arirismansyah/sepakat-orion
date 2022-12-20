<?php

namespace App\Http\Controllers;

use App\Models\data_regsosek_rt;
use Illuminate\Http\Request;

class OrionKeluargaController extends Controller
{
    //
    public function index(){
        $data_keluarga = data_regsosek_rt::all();
        return view('pages/orion_keluarga', compact('data_keluarga'));
    }
}
