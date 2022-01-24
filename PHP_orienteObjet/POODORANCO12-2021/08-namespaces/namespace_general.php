<?php

namespace General;

require_once('namespace_commerce.php');

use Commerce1;
use Commerce2;
use Commerce3;

use Commerce1, Commerce2, Commerce3;

$std = new \StdClass();// la stdClass est une class par defaut de php, ici
//dans notre exemple nous sommes dans le namespace General, sans le \ date_interval_create_from_date_string
//la stdClass lors de l'instanciation, l'interpreteur cherche à trouver cette class
//dans le namespace actuel (General), mais avec le \ il va chercher
//dans l'espace global d'origine de php, cela me permet de sortir 
//namespace //le temps d'une ligne. 

var_dump($std);

$commande = new Commerce1\Commande;
$produit = new Commerce2\Produit;
$produit = new Commerce3\Produit;