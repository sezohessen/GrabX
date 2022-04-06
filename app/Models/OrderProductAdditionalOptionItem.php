<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductAdditionalOptionItem extends Model
{
    use HasFactory;
    protected $table    = 'order_product_additional_option_items';
    protected $fillable=[
        'qty',
        'order_id',
        'product_id',
        'product_item_id'
    ];
    public function item()
    {
        return $this->belongsTo(ProductAdditionalOptionItem::class,'product_item_id','id');
    }

}
