<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSelectOptionItem extends Model
{
    use HasFactory;
    protected $table    = 'product_select_option_items';
    protected $fillable=[
        'name',
        'name_ar',
        'product_id',
        'product_select_option_id',
        'price',
        'type',
        'max_count'
    ];
    const OneSelect         = 1;
    const MultipleSelect    = 2;
    const AdditionalSelect  = 3;

    public function option()
    {
        return $this->belongsTo(ProductSelectOption::class,'product_select_option_id','id');
    }
}
