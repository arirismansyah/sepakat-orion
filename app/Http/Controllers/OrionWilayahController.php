<?php

namespace App\Http\Controllers;

use App\Models\m_desa;
use App\Models\m_kab;
use App\Models\m_kec;
use App\Models\m_prov;
use Illuminate\Http\Request;

class OrionWilayahController extends Controller
{
    //
    public function index()
    {
        $prov = m_prov::all();
        $kab = m_kab::all();
        $kec = m_kec::all();
        return view('pages/orion_wilayah', compact('prov', 'kab', 'kec'));
    }

    public function get_desa(Request $request)
    {
        $id_kab = $request->id_kab;
        $id_kec = $request->id_kec;

        $data_desa = m_desa::where('id_kab', 'LIKE', '%' . $id_kab . '%')
            ->where('id_kec', 'LIKE', '%' . $id_kec . '%')->get();

        return $data_desa;
    }
}
