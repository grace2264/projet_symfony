<?php

class Ecole 
{
    public $nom = 'Doranco';
    public $cp = 93;
    public function __clone()
    {
        $this->cp = 92;
    }
}
//---
$ecole1 = new Ecole();
$ecole1->cp = 75;
var_dump($ecole1);// objet[1]
echo '<br>';
$ecole2 = new Ecole();
var_dump($ecole2);// objet[2]
echo '<br>';
$ecole3 = $ecole1;// transmission de référence [1]
var_dump($ecole3);// objet[1]
echo '<br>';

$ecole1->cp = 91;
echo 'Ecole1 ' . $ecole1->cp . '<br>';
echo 'Ecole3 ' . $ecole3->cp . '<br>';

$ecole4 = clone $ecole2;// pas transmission de reférencele clone crée un objet et recupere les information de $ecole2 mais modifie le cp à 92 via __clone() ) 
var_dump($ecole2);//objet[2]
var_dump($ecole4);//objet[3] avec cp = 92