<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItemOption extends Model
{
    use HasFactory;
    protected $table    = 'order_item_options';
    protected $fillable=[
        'order_id',
        'product_id',
        'product_select_option_item_id',
        'copy_num'
    ];
    /**
     * Get the user that owns the OrderItemOption
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
    {
        return $this->belongsTo(ProductSelectOptionItem::class,'product_select_option_item_id','id');
    }
}
