<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    const base = '/img/products/';

    protected $table    = 'products';
    protected $fillable=[
        'name',
        'name_ar',
        'desc',
        'desc_ar',
        'price',
        'qty',
        'availabe_qty',
        'active',
        'image_id',
        'category_id'
    ];

    public static function credentials($request,$Img,$active)
    {
        $credentials = [
            'name'              => $request->name,
            'name_ar'           => $request->name_ar,
            'desc'              => $request->desc,
            'desc_ar'           => $request->desc_ar,
            'price'             => $request->price,
            'qty'               => $request->qty,
            'availabe_qty'      => $request->availabe_qty,
            'active'            => $active,
            'category_id'       => $request->category_id,
            'image_id'          => $Img,
        ];
        return $credentials;
    }

    public function image(): BelongsTo
    {
        return $this->BelongsTo(Image::class,'image_id');
    }
}
