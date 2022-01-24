<?php

class Panier
{
    public $produit; // propriété
    public function ajouterArticle() // méthode
    {
        return "l'article a été ajouté";
    }

    protected function retirerArticle()
    {
        //traitement
        return "l'article a été retiré";
    }

    private function affichageArticle()
    {
        //traitement
        return "voici les articles";
    }
}

// ---------------------------
$panier = new Panier(); // instanciation
var_dump($panier);// type (objet), nom de la classe (Panier), Référence de l'objet (#1)
//var_dump(get_class_methodes($panier));
$panier->nbProduit = 5;
echo 'dans le panier il y a : ' . $panier->nbProduit . ' produits<br>'; // on affiche la valeur de la propriété nbProduit de l'objet $panier
echo $panier->ajouterArticle(). ' </br> ';
//echo $panier->retirerArticle() . '</br>'; // erreur, la méthode est en "protected", l'élément 
est accessible uniquement dans la class où cela a été déclaré ainsi que dans les class héritières
// echo $panier->affichageArticle() . '</br>'; // erreur, la méthode est en "private" l'élément
est accessible uniquement dans la class où cela est déclaré. 


$panier2 = new Panier();
$panier2->nbProduit = 3;
echo 'panier2 > ' . $panier2->nbProduit . ' produits<hr>';

// ---------------------------------
/ ********************************

Niveau de visibilité : 
    public : accessible de partout
    protected : accessible depuis la class et ces héritières uniquement
    private : accessible uniquement dans la class où cela est déclaré

    Divers:
        - new est un mot clé permettant d'effectuer une instanciation.
        - Une class peut produire plusieurs objets. Nous pouvons donc effectuer plusieurs
        instanciation 'new'.
        - $panier est techniquement appelé "l'objet de la class Panier". 

    *************************************/
