<?php

namespace App;


use SON\Init\Boostrap;

class Routes extends Boostrap
{
    protected function initRoutes()
    {
        $routes['home']    = array('route'=>'/','controller'=>'indexController','action'=>'index');
        $routes['contact'] = array('route'=>'/contact','controller'=>'indexController','action'=>'contact');
        $routes['lista'] = array('route'=>'/lista','controller'=>'usuarioController','action'=>'lista');
        $this->setRoutes($routes);
    }
}