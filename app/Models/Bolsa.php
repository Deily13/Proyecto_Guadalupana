<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bolsa extends Model
{
    use HasFactory;

    protected $table = 'bolsa';

    // Define los campos asignables en masa
    protected $fillable = [
        'product_id',
        'user_id',
        'cantidad',
        'sabor',
        'pay'
    ];

    // Relación con el modelo Product (si existe)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
