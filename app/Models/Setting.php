<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Setting extends Model
{
    use HasFactory;
    const logo = '/img/logo';
    const bg = '/img/bg';
    protected $table    = 'settings';
    protected $fillable=[
        'company_name',
        'desc',
        'desc_ar',
        'logo_id',
        'bg_id',
        'ACCESS_CODE',
        'MERCHANT_SECRET_KEY',
        'MERCHANT_IV',
        'MERCHANT_CODE'
    ];
    public function logo(): BelongsTo
    {
        return $this->BelongsTo(Image::class,'logo_id');
    }

    public function background(): BelongsTo
    {
        return $this->BelongsTo(Image::class,'bg_id');
    }

}
