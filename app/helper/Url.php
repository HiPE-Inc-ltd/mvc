<?php

namespace  app\helper\Url;

class Url
{
    /*
        @return a raw full url
    */
    public static function raw_base_url()
    {
        return "$_SERVER[REQUEST_SCHEME]://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
    /*
        @return a raw path url
    */
    public static function raw_path_url()
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            return $_SERVER['REQUEST_URI'];
        }
    }
    /*
        @return a sanitize full url
    */
    public static function sanitize_base_url()
    {
        // rtrim remove trailing slash and remove space
        return filter_var(Url::remove_trailing_slash(Url::raw_base_url()), FILTER_SANITIZE_URL);
    }
    /*
        @return a sanitize path url
    */
    public static function sanitize_path_url()
    {
        return filter_var(Url::remove_trailing_slash(Url::raw_path_url()), FILTER_SANITIZE_URL);
    }
    /*
        @return a url without a trailing slash
    */
    public static function remove_trailing_slash($uri)
    {
        return rtrim($uri, '/');
    }
}
