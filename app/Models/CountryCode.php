<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryCode extends Model
{
    use HasFactory;
    const base = '/img/flag/';
    protected $table    = 'country_codes';
    protected $fillable=[
        'name',
        'name_ar',
        'flag_id'
    ];
}
