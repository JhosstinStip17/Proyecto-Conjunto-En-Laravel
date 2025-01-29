<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torre extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "conjunto_id",
    ] ;

    public function conjunto()
    {
        return $this->belongsTo(conjunto::class, 'conjunto_id','id');
    }
}
