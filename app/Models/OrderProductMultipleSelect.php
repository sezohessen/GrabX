<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductMultipleSelect extends Model
{
    use HasFactory;
    protected $table    = 'order_product_multiple_selects';
    protected $fillable=[
        'order_id',
        'product_id',
        'product_multiple_select_item_id'
    ];
}
