<?php
namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class BlaController extends Action
{
    public function bla()
    {
        $this->render("bla",false);
    }
}