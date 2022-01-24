b<?php

class Homme
{
    private $prenom;
    private $nom;

    public function setPrenom($prenom)
    {
        if(is_string($prenom))
        {
            $this->prenom = $prenom;    
        }  
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setNom($nom)
    {
        if(is_string($nom))
        {
            $this->nom = $nom;
        }
    }
}

// -----------------------
$homme = new Homme();
//$homme->prenom = "toto"; // ne marche pas car la propriété $prenom dans la class Homme est en private
$homme->setPrenom("toto"); // je modifie l'élément (dans l'objet) car il est public
echo $homme->getPrenom() . "</br>"; // j'accède à l'élément  (dans l'objet) car il est public

$homme->setNom("tata"); // je modifie l'élément (dans l'objet) via un setter car la propriété est private
echo $homme->getNom() . "</br>"; // j'accède à l'élément (dans l'objet) via un getter car la propriété est en private
var_dump($homme);

echo "<hr>";
// -------------------------------
$homme2 = new Homme();
echo $homme2->getPrenom() . "<br/>"; // cette ligne ne donne aucun prenom car j'ai réinstancié 
l'objet dans la variable $homme2, preuve qu'on modifie bien l'objet et non la class.

//
/ ********************
   // - $this représente l'objet (en cours) à l'intérieur de la class
        l'objet en cours = l'objet qui execute la méthode

    - les getteurs (voir ou récupérer) et les setteurs (affecter) permettent de contrôler l'intégrité des données

    - mettre les attributs en private permet d'éviter qu'ils ne soient modifié dans le code (ex; is_int() ou is_string() cela permet une vérification avant d'affecter la valeur//
    - Ainsi il faut passer par un setteur qui peut

*/
