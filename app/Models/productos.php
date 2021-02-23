<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table = 'productos';
    protected $primarikeys = 'id';
    protected $fillable = ['id','nombre ','usoFrecuente'];

    public function setUpdatedAt($value){
      
     }

   public function setCreatedAt($value){
          
   }
}
