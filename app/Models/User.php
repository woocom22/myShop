<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['email', 'otp'];
    public function profile(): hasOne
    {
        return $this->hasOne(CustomerProfile::class);
    }
}
