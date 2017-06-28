<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const PRODUCTO_DISPONIBLE ='disponible';
    const PRODUCTO_NO_DISPONIBLE  ='no disponible';
    protected $fillable=[
        'name',
        'descripction',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];

    public function estaDisponible(){
        return $this->status = Product::PRODUCTO_DISPONIBLE;
    }

}
