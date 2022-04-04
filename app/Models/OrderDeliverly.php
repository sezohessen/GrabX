<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDeliverly extends Model
{
    use HasFactory;
    protected $table    = 'order_deliverlies';
    protected $fillable=[
        'order_id',
        'governorate_id',
        'city_id',
        'deliverly_cost',
        'unit_type',
        'street',
        'house_num',
        'special_direction'
    ];
}
