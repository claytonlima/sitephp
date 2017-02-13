<?php
namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action
{
    public function index()
    {
        $product = Container::getModel("Product");
        $this->view->product = $product->fetchAll();
        $this->render("index");
    }
    public function contact()
    {
        $product = Container::getModel("Product");
        $this->view->product = $product->find(2);
        $this->render("contact");
    }
}