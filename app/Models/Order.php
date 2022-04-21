<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const House         = 1;
    const Apartment     = 2;
    const Office        = 3;
    const Pending       = 1;
    const OnWay         = 2;
    const Delivered     = 3;
    const Canceled      = 4;
    public static function StatusType()
    {
        return [
            self::Pending       => __('Pending'),
            self::OnWay         => __('On the way'),
            self::Delivered     => __('Delivered'),
            self::Canceled      => __('Canceled')
        ];
    }
    public static function UnitType()
    {
        return [
            self::House         => __('House'),
            self::Apartment     => __('Apartment'),
            self::Office        => __('Office'),
        ];
    }
    protected $table    = 'orders';
    protected $fillable=[
        'ip',
        'name',
        'phone',
        'email',
        'pickup',
        'deliverly',
        'discount',
        'subtotal',
        'deliverly_cost',
        'total',
        'status'
    ];

    public function deliverlyRelation()
    {
        return $this->hasOne(OrderDeliverly::class);
    }

    public function pickupRelation()
    {
        return $this->hasOne(OrderPickup::class);
    }
    /**
     * Get all of the products for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /**
     * Get all of the comments for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_items')->withPivot(["price",'qty','copy_num','subtotal']);
    }

}
