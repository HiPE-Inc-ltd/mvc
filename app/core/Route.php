<?php

namespace  app\core\Route;

use app\helper\Url\Url;

class Route
{
    public $uri;

    public $action;

    public $method;

    public static function get($uri, $method = "")
    {
        return Route::isMatch($uri);
    }

    public static function isMatch($uri)
    {
        $bool = false;
        if (ltrim(Url::sanitize_path_url(), '/') === $uri) {
            return $bool = true;
        }
        return $bool;
    }
}
