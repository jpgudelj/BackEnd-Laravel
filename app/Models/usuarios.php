<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $table = 'usuarios';
    protected $primarikeys = 'id';
    protected $fillable = ['id','nombre ','email','habilitado'];

    public function setUpdatedAt($value){
      
     }

   public function setCreatedAt($value){
          
   }
}
