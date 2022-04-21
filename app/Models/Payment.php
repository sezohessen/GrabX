<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    const Pending       = 1;
    const Success       = 2;
    const Failed        = 3;
    protected $table    = 'payments';
    protected $fillable=[
        'name',
        'ip',
        'phone',
        'email',
        'type',
        'order_id',
        'governorate_id',
        'city_id',
        'make',
        'color',
        'license',
        'unit_type',
        'street',
        'house_num',
        'special_direction',
        'deliverly_cost',
        'total',
        'amount',
        'status',
    ];
}
