<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSelectOption extends Model
{
    use HasFactory;
    protected $table    = 'product_select_options';
    protected $fillable=[
        'name',
        'product_id',
        'type',
    ];
}
