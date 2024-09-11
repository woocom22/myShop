<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerProfile extends Model
{
    protected $fillable = [
        'cus_name',
        'cus_add',
        'cus_city',
        'cus_state',
        'cus_postcode',
        'cus_country',
        'cus_phone',
        'cus_fax',
        'ship_name',
        'ship_add',
        'ship_city',
        'ship_postcode',
        'ship_country',
        'ship_phone',
        'user_id'
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}


