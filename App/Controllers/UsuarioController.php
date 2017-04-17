<?php
namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class UsuarioController extends Action
{
    public function lista()
    {
        $this->render("lista",false);
    }
}