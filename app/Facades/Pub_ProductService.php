<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Pub_ProductService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Pub_Product';
    }

}
