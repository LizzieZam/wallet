<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class pago extends Model{
    public $timestamps = false;
    protected $fillable = ['subtotal', 'iva', 'descuento','total','fecha'];
}
