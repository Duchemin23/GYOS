<?php
/**
 * Created by PhpStorm.
 * User: alexandremoreau
 * Date: 04/03/2018
 * Time: 17:00
 */

namespace Controllers;

class BaseController
{
    public function indexAction()
    {
        $smarty = new \Smarty();

        echo "Hello World!";
    }
}