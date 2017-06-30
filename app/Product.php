<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Seller;
use App\Transaction;

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

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

}
