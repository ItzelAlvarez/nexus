<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];
    //protected $guarded = ['id']; //lo que no permitira que ingrese el usuario

    public $timestamps = false;

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
