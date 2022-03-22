<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'count',
        'sex',
        'description',
        'content',
        'menu_id',
        'price',
        'price_sale',
        'thumbnail',
        'active',
    ];

    public function menu()
    {
        return $this->hasOne(Menu::class, 'id', 'menu_id')->withDefault('name');
    }
}