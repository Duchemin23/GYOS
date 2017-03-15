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
$twig = new Twig_Environment($loader, array('cache' => false));

/*** Chargement des extensions ***/



/*** Chargement du template ***/
echo $twig->render('main.html', array(
    'title' => 'Projet GYOS'
));