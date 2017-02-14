<?php
namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class RobotsController extends Action
{
    public function robots()
    {
        $this->render("robots",false);
    }
}