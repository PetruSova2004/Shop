<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = false;


    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'product_order');
    }

}
