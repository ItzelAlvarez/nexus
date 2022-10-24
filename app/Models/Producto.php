<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'categoria', 'existencias', 'precio'];
    //protected $guarded = ['id']; //lo que no permitira que ingrese el usuario

    //public $timestamps = false;
}
