<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPickup extends Model
{
    use HasFactory;
    protected $table    = 'order_pickups';
    protected $fillable=[
        'order_id',
        'make',
        'color',
        'license'
    ];
}
