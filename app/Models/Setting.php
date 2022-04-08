<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    const logo = '/img/logo/';
    const bg = '/img/bg/';
    protected $table    = 'settings';
    protected $fillable=[
        'company_name',
        'desc',
        'desc_ar',
        'logo_id',
        'bg_id'
    ];
}
