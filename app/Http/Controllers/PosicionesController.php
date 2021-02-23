<?php

namespace App\Http\Controllers;
use App\Clases\Mercado; 
use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\posiciones;

class PosicionesController extends Controller
{
    public function posiciones(){
      
        $a = new Mercado(); // Instancia de la clase Posiciones
        return response()->json($a->getPosiciones(),200);
  
       
      }
    
      public function posicionesLocal(){
      
        $a = new Mercado(); // Instancia de la clase Posiciones
        $posiciones = $a->getPosicionesLocal();
        
        return view('posiciones')
          ->with ('posiciones',$posiciones);
    
      }
   
}
