<?php
namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action
{
    public function index()
    {
        $this->render("index");
    }
    public function contact()
    {
        $this->render("contact");
    }
}