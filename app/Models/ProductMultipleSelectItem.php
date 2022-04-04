<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMultipleSelectItem extends Model
{
    use HasFactory;
    protected $table    = 'product_multiple_select_items';
    protected $fillable=[
        'name',
        'price',
        'name_ar',
        'product_id',
        'product_multiple_select_id'
    ];
}
