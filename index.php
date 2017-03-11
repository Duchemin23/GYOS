<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 11/03/2017
 * Time: 13:15
 */

/*** Ajout des bibliothèques ***/

// Namespace
require("lib/smarty/smarty.class.php"); // On inclut la classe Smarty



/*** Chargement des extensions ***/

$tpl = new Smarty();

$tpl->assign('title','Page principale');


/*** Chargement du template ***/

$tpl->display("content/theme/gyos_default/main.html");
?>