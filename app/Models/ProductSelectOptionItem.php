<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSelectOptionItem extends Model
{
    use HasFactory;
    protected $table    = 'product_select_option_items';
    protected $fillable=[
        'name',
        'name_ar',
        'product_id',
        'product_select_option_id',
        'price'
    ];
}
