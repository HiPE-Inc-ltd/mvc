<?php

namespace app\core\App;

use app\core\Route\Route;
use app\helper\Helper\Helper;
use app\helper\Url\Url;

class App
{
    protected $routes = [];
    public function __construct()
    {
        $routes = Route::getRoutes();
        $current_uri = Helper::secure_path_url();
        $isExist = false;
        foreach ($routes as $route) {
            if ($route['uri'] === $current_uri) {
               
            }
        }
        echo $isExist;
    }
}
