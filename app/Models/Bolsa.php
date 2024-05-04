<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bolsa extends Model
{
    protected $table = 'bolsa';

    // Define los campos asignables en masa
    protected $fillable = ['id','nombre' , 'image', 'Descripción', 'cantidad', 'precio_total', 'sabor'];

    // Relación con el modelo Product (si existe)
    public function producto()
    {
        return $this->belongsTo(Product::class, 'id');
    }
    
    use HasFactory;
}
