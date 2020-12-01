<?php

namespace app\core\App;

use app\helper\Helper\Helper;
use app\core\Route\Route;

class App
{
    public function __construct()
    {
        echo Route::get('home');
    }
}
