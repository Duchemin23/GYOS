<?php
/**
 * Created by PhpStorm.
 * User: alexandremoreau
 * Date: 04/03/2018
 * Time: 16:55
 */

require_once "vendor/autoload.php";

$class = 'base/Controllers/BaseController';
$target = 'indexAction';

if (class_exists($class, true)) {
    $class = new $class();
    if (in_array($target, get_class_methods($class))) {
        call_user_func_array([$class, $target], $params);
    } else {
        call_user_func([$class, "indexAction"]);
    }
} else {
    echo "404 - Error";
}