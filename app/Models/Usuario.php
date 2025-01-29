<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "apartamento_id",
    ] ;

    public function apartamento(){
        return $this->belongsTo(Apartamento::class,"apartamento_id", "id");
    }

    public function torre()
    {
        return $this->belongsTo(Torre::class, 'torre_id', 'id');
    }

    public function conjunto()
    {
        return $this->belongsTo(Conjunto::class,'conjunto_id','id');
    }
}


