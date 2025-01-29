<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'usuario_id'
    ] ;

    public function usuario(){
        return $this->belongsTo(Usuario::class,"usuario_id", "id");
    }

}
