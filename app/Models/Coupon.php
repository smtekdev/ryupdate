<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'discount', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function isValid($code)
    {
        return self::where('code', $code)->exists();
    }
}

