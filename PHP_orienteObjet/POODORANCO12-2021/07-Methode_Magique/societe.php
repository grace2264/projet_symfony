<?php

class Societe
{
    public $adresse;
    public $ville;
    public $cp;

    public function __construct(){}
    // __set se declanche automatiquement lorsque l'on essaie d'affecter une valeur sur une propriété qui n'existe pas
    public function __set($nom, $valeur)
    {
        echo "la propriété $nom n'existe pas, la valeur $valeur n'a donc pas été affectée! <hr>";
    }
    public function __get($nom)
    {
        echo "la propriété $nom n'existe pas, on ne peut donc pas l'afficher! <hr>";
    }
    public function __call($nom, $argument)
    {
        echo "Tentative d'exécuter la methode $nom mais elle n'existe pas. <br> les arguments étaient " . implode("-",$argument) . "<hr>";
    }
}

//-----
$societe = new Societe();
// affectation sur une propriété qui n'existe pas (fonctionne au debut, ce qui est anormal)
// $societe->villes = 'Paris';
// echo $societe->villes;

$societe->pays = "France";// déclenchement de la methode __set() au lieu de la creation d'une nouvelle propriété
$societe->ville = "Paris";// la propriété existe, donc pas de declenchement de __set() la valeur est donc affectée normalement

echo $societe->titre;// déclenchement de la méthode __get() au lieu d'avoir une erreur undefine de php
echo $societe->azerty(1,2,3);

print '<pre>'; print_r($societe); print'</pre>';



