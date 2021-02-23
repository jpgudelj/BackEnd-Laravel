<?php 

namespace App\Clases;
use App\Models\posiciones;
class Mercado
{
    /* métodos y/o atributos */
    
    // Declaración de una propiedad

    
    // Declaración de un método
    public function getPosiciones(){
        
        $data = posiciones::leftjoin('productos','idProducto','=','productos.id')
                                  ->leftjoin('empresas','idEmpresa','=','empresas.id')  
                                  ->orderBy('productos.usoFrecuente', 'DESC')
                ->get();

         return $data;
    }

    public function getPosicionesLocal(){
        
        $data = posiciones::leftjoin('productos','idProducto','=','productos.id')
                                  ->leftjoin('empresas','idEmpresa','=','empresas.id')  
                                  ->orderBy('productos.usoFrecuente', 'DESC')
                ->paginate(3);

         return $data;
    }

}