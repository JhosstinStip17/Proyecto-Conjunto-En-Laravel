<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puestos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'parqueadero_id',
        'usuario_id'
        ];

    Public function parqueadero(){
        return $this->belongsTo(Parqueadero::class, 'parqueadero_id', 'id');         
    }
    Public function usuarios(){
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
          
    }
}

