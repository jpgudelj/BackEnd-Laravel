<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posiciones extends Model
{
    protected $table = 'posiciones';
    protected $primarikeys = 'id';
    protected $fillable = ['id','idEmpresa ','idProducto','fechaEntregaInicio','moneda','precio'];

    public function setUpdatedAt($value){
      
     }

   public function setCreatedAt($value){
          
   }
}
