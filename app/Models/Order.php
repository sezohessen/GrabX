<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const status = [
        0   => 'pending',
        1   => 'on the way',
        2   => 'deliverled',
        3   => 'canceled'
    ];
    const unit_type = [
        0   => 'house',
        1   => 'appartment',
        2   => 'office',
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
