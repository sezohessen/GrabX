<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestIp extends Model
{
    use HasFactory;
    protected $table    = 'guests_ip';
    protected $fillable=[
        'ip',
        'iso_code',
        'country',
        'city',
        'state',
        'state_name',
        'postal_code',
        'lat',
        'lon',
        'timezone',
        'continent',
        'currency'
    ];
}
