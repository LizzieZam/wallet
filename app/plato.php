<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class plato extends Model{
    public $timestamps = false;
    protected $fillable = ['nombre', 'tipo', 'precio','idRestaurante','imagen'];
}
