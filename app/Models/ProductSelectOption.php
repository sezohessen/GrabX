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
    /**
     * Get all of the Items for the ProductSelectOption
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Items()
    {
        return $this->hasMany(ProductSelectOptionItem::class,'product_select_option_id','id');
    }
}
