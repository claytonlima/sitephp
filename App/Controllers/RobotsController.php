<?php
namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class RobotsController extends Action
{
    public function contact()
    {
         $this->render("robots",false);
    }
}