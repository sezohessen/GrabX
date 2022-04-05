<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const status = [
        'pending'       => 1,
        'on way'        => 2,
        'delivered'     => 3,
        'canceled'      => 4,
    ];
    const unit_type = [
        'house'         => 1,
        'appartment'    => 2,
        'office'        => 3
    ];
    protected $table    = 'orders';
    protected $fillable=[
        'name',
        'phone',
        'email',
        'pickup',
        'deliverly',
        'discount',
        'subtotal',
        'total',
        'status'
    ];
}
