<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'brand_name',
    ];

        /**
     * @return BelongsTo
     */
    public function products(): BelongsTo
    {
        return $this->belongsTo(
            Product::class,
        );
    }
}
