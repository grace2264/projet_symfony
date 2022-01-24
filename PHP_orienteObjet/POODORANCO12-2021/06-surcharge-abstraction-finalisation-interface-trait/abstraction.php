<?php

abstract class loueur
{
    public function seConnecter()
    {
        return $this->EtreMajeur();
    }

    abstract public function EtreMajeur();// Les methodes abstraites n'ont pas de contenu
    abstract public function Devise();// Les methodes abstraites n'ont pas de contenu
}
//--------------
class JoueurFr extends Joueur
{
    public function EtreMajeur()// Je suis obligé de redéfinir la methode de 
    //ma class mère sinon c'est une erreur
    {
        return 18;
    }

    public function Devise()
    {
        return '$';
    }
}
//-----------------
$joueur = new Joueur(); // erreur, une class abstraite n'est pas instanciable

$joueurFr = new JoueurFr();
echo $joueurFr->seConnecter();
echo '<hr>';
$joueurUs = new JoueurFr();
echo $joueurUs->seConnecter();

/*******************
 *  - une class abstraite n'est pas instanciable
 * - les methodes abstraites n'ont pas de contenu
 * - lorsque l'on hérite de methodes abstraites, nous sommes obligés de les redéfinir
 * - pour définir des methodes abstraites il est nécessaire que les
 */