<?php
namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class BlaController extends Action
{
    public function contact()
    {
        $this->render("bla",false);
    }
}