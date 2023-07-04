<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CheckoutService extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Checkout';
    }

}
