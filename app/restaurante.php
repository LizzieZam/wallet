<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class restaurante extends Model{
    public $timestamps = false;
    protected $fillable = ['nombre', 'direccion', 'telefono'];
    
}
