<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 11/03/2017
 * Time: 13:15
 */

/*** Vérifie l'installation ***/
// header:location

/*** Ajout des bibliothèques ***/

// Namespace
include_once('vendor/autoload.php');

$tpl = new Smarty();

$tpl->assign("title","Projet");
$tpl->assign("bienvenue","Bienvenue sue ce super site");
/*$tpl->assign(array(
    "une_variable" => "Je suis une variable",
    "une_autre_variable" => "Je suis une belle variable"
    // ...
));*/

$tpl->display("content/theme/gyos_default/main.html");

/*** Chargement des extensions ***/



/*** Chargement du template ***/