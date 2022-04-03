<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAdditionalOption extends Model
{
    use HasFactory;
    protected $table    = 'product_additional_options';
    protected $fillable=[
        'name',
        'name_ar',
        'product_id'
    ];
}
