<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class pedido extends Model{
    public $timestamps = false;
    protected $fillable = ['cantidad', 'total','idPlato'];
}
