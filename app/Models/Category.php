<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = false;
    //Свойство $guarded должно содержать массив атрибутов, которые вы не хотите назначать массово.

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
