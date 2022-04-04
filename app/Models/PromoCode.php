<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    use HasFactory;
    protected $table    = 'promo_codes';
    protected $fillable=[
        'code',
        'discount',
        'max_price_discount',
        'max_count',
        'usable',
        'active',
    ];
}
