<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //Метод __invoke() вызывается, когда скрипт пытается выполнить объект как функцию.
    public function __invoke()
    {
        return view('main.index');
    }

}
