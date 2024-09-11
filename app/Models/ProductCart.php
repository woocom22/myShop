<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductCart extends Model
{
    protected $fillable = ['user_id', 'product_id', 'color', 'size', 'qty','price'];

    public function product():BelongsTo{
        return $this->belongsTo(Product::class);
    }
}























