<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Sede;

class TiendaController extends Controller {

    public function getTiendas() {
        $Tiendas = DB::table('sedes')
                ->join('routervpns', function ($join) {
                    $join->on('routervpns.idSede', '=', 'sedes.id_sede')
                    ->where('id_sede', 'LIKE', 'SU%');
                })
                ->get();
        return view('tiendas', compact("Tiendas"));
    }

    public function store(Request $request) {
        $Sede = new Sede();
        $Sede->save();
        return true;
    }

    public function show($id) {
        
    }

}
