<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CommandService extends Facade
{
    static protected function getFacadeAccessor()
    {
        return 'Command';
    }

}
