<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAdditionalOptionItem extends Model
{
    use HasFactory;
    protected $table    = 'product_additional_option_items';
    protected $fillable=[
        'name',
        'name_ar',
        'price',
        'product_id',
        'product_select_option_id'
    ];
}
