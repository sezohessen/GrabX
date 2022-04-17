<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItemOption extends Model
{
    use HasFactory;
    protected $table    = 'cart_item_options';
    protected $fillable=[
        'cart_id',
        'product_id',
        'qty',
        'product_select_option_item_id',
        'copy_num'
    ];
}
