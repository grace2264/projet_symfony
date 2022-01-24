<?php

trait TPanier
{
    public $nbProduit = 1;
    public function affichageProduits()
    {
        return "voici les produits";
    }
    
}

trait TMembre
{
    public function affichageMembres()
    {
        return "voici les membres";
    }
}

class Site
{
    use TPanier, TMembre; // utilisation des traits
}

$site = new Site();
echo $site->affichageProduits() . '<hr>';
echo $site->affichageMembres() . '<hr>';
echo $site->nbProduit . '<hr>';

var_dump($site);
echo '<hr>';
var_dump(get_class_methods($site));
echo '<hr>';

/*********************
    - les trait ont été inventés pour repousser les limites de l'héritage (pas d'héritage multiple)
    - une class ne peut hériter que d'une class à la fois, en revanche elle peut importer (donc hériter) de plusieurs traits
    - il est utile d'utiliser les traits quand l'une de class a besoin d'une methode de la class X et d'une autre methode de la class Z
  */
  // un trait peut en utiliser un autre
  trait A
  {
    public function a(){return 'a';}
  }
  trait B
  {
      use A;
      public function b(){ return 'b';}
  }
  class Test
{
    use B;
}
$objet = new Test();
echo $objet->b() . '<hr>';
echo $objet->a() . '<hr>';
