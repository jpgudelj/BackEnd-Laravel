<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{
    protected $table = 'empresas';
    protected $primarikeys = 'id';
    protected $fillable = ['id','cuit ','razonSocial'];

    public function setUpdatedAt($value){
      
     }

   public function setCreatedAt($value){
          
   }
}
