<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    use HasFactory;
    protected $table = "carritos";
    protected $primaryKey = "id_carrito";
    
    public $timestamps = false;
}
