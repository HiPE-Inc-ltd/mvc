<?php

namespace  app\helper\Helper;

use  app\helper\Url\Url;

class Helper
{

    public static function base_url()
    {
        return Url::raw_base_url();
    }
    public static function secure_base_url()
    {
        return Url::sanitize_base_url();
    }
    public static function path_url()
    {
        return Url::raw_path_url();
    }
    public static function secure_path_url()
    {
        return Url::sanitize_path_url();
    }
}
