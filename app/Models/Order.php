<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const IS_CONFIRMED = 1;
    const NOT_CONFIRMED = 0;

    static function getConfirmation()
    {
        return [
            self::IS_CONFIRMED => 'Confirmed',
            self::NOT_CONFIRMED => 'Not Confirmed',
        ];
    }

    public function getConfirmationAttribute()
    {
        return self::getConfirmation()[$this->is_confirmed];
    }

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'user_id',
        'company',
        'country',
        'address',
        'city',
        'phone',
        'additional-information',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order');
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

}
