<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'total', 'numero_factura'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($payment) {
            $payment->numero_factura = 'GUAD' . str_pad(Payment::max('id') + 1, 5, '0', STR_PAD_LEFT);
        });
    }
}
