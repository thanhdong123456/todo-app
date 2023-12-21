<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'parent_id',
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
