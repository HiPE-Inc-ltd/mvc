<?php

namespace  app\core\Route;

use app\helper\Url\Url;
class Route
{
    public $uri = null;

    public $action = null;

    public $function = null;

    private static $routes = [];

    public static function get($uri, $function)
    {
        array_push(
            self::$routes,
            [
                'method' => 'get',
                'uri' => Url::remove_trailing_slash($uri),
                'function' => $function,
            ]
        );
    }
    public static function post($uri, $function)
    {
        array_push(
            self::$routes,
            [
                'method' => 'post',
                'uri' => Url::remove_trailing_slash($uri),
                'function' => $function,
            ]
        );
    }

    public static function getRoutes(){
        return self::$routes;
    }
}
