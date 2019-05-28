<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class juego extends Model{
    public $timestamps = false;
    protected $fillable = ['puntos'];
    
}
