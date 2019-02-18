<?php
namespace App\Http\Controllers;
use App\Sede;

class TiendaController extends Controller {
        
    public function getTiendas() {
        $Sedes = Sede::all();
        return view('tiendas', compact("Sedes"));
    }
    
    public function store(Request $request){
        $Sede = new Sede();
        $Sede->save();
        return true;
    }
    
    public function show($id){
    }
}
