<?php

class App
{
    protected $controller = 'home';

    protected $method = 'index';

    protected $param = [];

    public function __construct()
    {
        var_dump($this->parse_url());
    }

    public function parse_url()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
