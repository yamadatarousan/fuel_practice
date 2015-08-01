<?php

class Controller_Check extends Controller
{

    public function action_index()
    {
        echo '<pre>';
        echo 'FuelPHP varsion:' . Fuel::VERSION .PHP_EOL;
        echo 'locale:'. setlocale(LC_ALL,'0') .PHP_EOL;
        echo 'date:' . Date::forge()->format('mysql') .PHP_EOL;
        echo 'default:_charset:' . ini_get('default_charset') .PHP_EOL;
        echo '</pre>';
    }

}