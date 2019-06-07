<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class pagoDetalle extends Model{
    public $timestamps = false;
    protected $fillable = ['idPedido', 'cantidad', 'precio','idPago','fecha'];
}
