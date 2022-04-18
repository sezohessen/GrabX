<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table    = 'carts';
    protected $fillable=[
        'ip',
        'discount',
        'subtotal',
        'total'
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_items')->withPivot(["price",'qty','copy_num','subtotal']);
    }
}
