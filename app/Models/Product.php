<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const base = '/img/products/';
    protected $table    = 'products';
    protected $fillable=[
        'name',
        'name_ar',
        'desc',
        'desc_ar',
        'price',
        'qty',
        'availabe_qty',
        'active',
        'image_id',
        'category_id'
    ];
}
