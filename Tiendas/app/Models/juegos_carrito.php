<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juegos_carrito extends Model
{
    use HasFactory;
    protected $table = "juegos_carritos";
    protected $fillable = ['id_carrito','id_juego'];

    public $timestamps = false;

    public function carrito()
    {
        return $this->belongsTo(Carrito::class, 'id_carrito');
    }
}
