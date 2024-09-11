<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductReviews extends Model
{
    public function profile(): BelongsTo
    {
        return $this->belongsTo(CustomerProfile::class, 'customer_id');
    }
    protected $fillable = ['description', 'rating', 'customer_id', 'product_id'];
}

























