<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'user_id', 'categoria_id', 'existencias', 'precio'];
    //protected $guarded = ['id']; //lo que no permitira que ingrese el usuario

    //public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function entradas()
    {
        return $this->belongsToMany(Entrada::class);
    }

    public function salidas()
    {
        return $this->hasMany(Salida::class);
    }

}
