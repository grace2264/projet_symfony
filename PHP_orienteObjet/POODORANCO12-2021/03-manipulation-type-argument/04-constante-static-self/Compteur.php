<?php
class Compteur
{
    public static $nbInstanceClass = 0;
    public $nbInstanceObjet = 0;

    public function __construct()
    {
        ++self::$nbInstanceClass; // self::nbInstanceClass + 1
        ++$this->nbInstanceObjet;
    }
}
//------------------------
$c1 = new Compteur;
$c2 = new Compteur;
$c3 = new Compteur;
$c4 = new Compteur;
$c5 = new Compteur;

echo 'nombre de fois que la class est instanciée : ' . Compteur::$nbInstanceClass . '<hr>'; // 
affiche 5

echo 'nombre de fois que l\'objet est instancié : ' . $c5->nbInstanceObjet . '<hr>';

/********************
    - la class a produit 5 objets
    - l'objet a été produit 5 fois

    métaphore:
        Une dame a 5 enfants, elle est maman 5 fois; cacun de ses enfants est né qu'uneseule fois
        la class c'est la maman
        l'objet c'est l'enfant
 */

