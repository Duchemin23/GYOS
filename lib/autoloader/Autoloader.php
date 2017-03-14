<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 14/03/2017
 * Time: 09:57
 */
class Autoloader {
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    static function autoload($class){
        require 'class/' . $class . '.php';
    }
}