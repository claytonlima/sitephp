<?php
/**
 * Created by PhpStorm.
 * User: clayton
 * Date: 02/02/17
 * Time: 23:25
 */

namespace SON\Init;


abstract  class Boostrap
{
    private $routes;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    abstract  protected function initRoutes();

    protected function run($url)
    {
        $found = false;
        foreach($this->routes as $route){
            if ($url == $route['route']){
                $found = true;
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        }

        if(!$found){
            preg_match('/^\/(\w+)\/?(\w+)?/', $url, $m);
            $ctr = $m[1];
            $act = $m[0];
            if(!$act){
                $act = 'index';
            }
            $class = "App\\Controllers\\".ucfirst($ctr).'Controller';
            $controller = new $class;
            $action = $route['action'];
            $controller->$action();
        }
    }

    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}
