<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'slug',
        'nombre',
        'image',
        'precio',
        'Stock',
        'Descripción'
    ];

    public function bolsa()
    {
        return $this->hasMany(Bolsa::class, 'product_id');
    }
}
