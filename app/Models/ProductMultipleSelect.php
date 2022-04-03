<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMultipleSelect extends Model
{
    use HasFactory;
    protected $table    = 'product_multiple_selects';
    protected $fillable=[
        'name',
        'name_ar',
        'product_id'
    ];
}
