<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $timestamp = false;

    protected $fillable = [
        'customer_id',
        'product_id',
        'quantity',
        'price',
    ];
}