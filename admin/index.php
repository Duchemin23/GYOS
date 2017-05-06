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
$tpl = new Smarty();


/*** Vérification connexion ***/
// Todo : connexion

$tpl->assign("title","Projet GYOS");
$tpl->assign("bienvenue","Bienvenue sue ce super site");



/*** Chargement des extensions ***/

// Todo : menu avec liens

/*** Chargement du template ***/

$tpl->display("../content/themes/gyos_back/main.html");
