<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultades')->get();
        return view('facultades.listado', ['facultades' =>$facultades]);
    }
 
    public function form_registro(){ 
        return view('facultades.form_registro');
    }

    public function registrar(Request $r){
        $facultad = new Facultad();
        $facultad->codFacultad = $r->input('codigoFacultad');
        $facultad->nomFacultad = $r->input('nombreFacultad');
        $facultad->save();
        return redirect()->route('listadoFac');
    }

    public function eliminar($id){
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoFac');
    }

    public function form_edicion($codFacultad){
        $facultad = Facultad::where('codFacultad', $codFacultad)->first();

        if (!$facultad) {
            return redirect()->route('listadoFac');
        }
        
        return view('facultades.form_edicion', compact('facultad'));
    }

    public function editar(Request $r, $codFacultad){
        $facultad = Facultad::where('codFacultad', $codFacultad)->first();
        
        if (!$facultad) {
            return redirect()->route('listadoFac');
        }
        
        // Validar los datos del formulario
        $r->validate([
            'codigoFacultad' => 'required',
            'nombreFacultad' => 'required',
        ]);
        
        // Actualizar los datos de la facultad
        $facultad->codFacultad = $r->input('codigoFacultad');
        $facultad->nomFacultad = $r->input('nombreFacultad');
        $facultad->save();
        
        return redirect()->route('listadoFac');
    }
    
}
