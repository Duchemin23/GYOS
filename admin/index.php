<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 15/03/2017
 * Time: 09:54
 */

/*** Vérifie l'installation ***/
// header:location

/*** Ajout des bibliothèques ***/

// Namespace
include_once('../vendor/autoload.php');

$loader = new Twig_Loader_Filesystem('../content/theme/gyos_back'); // Dossier contenant les templates
$tpl = new Smarty();

$tpl->assign("title","Projet GYOS");
$tpl->assign("bienvenue","Bienvenue sue ce super site");

$tpl->display("../content/theme/gyos_back/main.html");

/*** Chargement des extensions ***/



/*** Chargement du template ***/
