<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'category_id',
        'brand_id',
        'product_name',
        'price',
        'content',
        'discount',
        'image',
        'image_list',
        'status',
    ];

        /**
     * @return HasOne
     */
    public function categories(): HasOne
    {
        return $this->hasOne(
            Category::class,
            'id',
            'category_id'
        );
    }

        /**
     * @return HasOne
     */
    public function brands(): HasOne
    {
        return $this->hasOne(
            Brand::class,
            'id',
            'brand_id'
        );
    }
}
