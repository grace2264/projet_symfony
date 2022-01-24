<?php

class Vehicule
{
    private static $marque = "BMW";
    private $couleur = "noir";
    public function getMarque()
    {
        return self::$marque;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    public function setMarque($marque)
    {
        self::$marque = $marque;
    }
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
}

//--------------------------------


$vehicule1 = new Vehicule();
echo 'Vehicule1' est de marque : ' . $vehicule1'->getMarque() . ' et de
 couleur ' . $vehicule1->getCouleur() . '<hr>'; //BMW noir

 $vehicule2 = new Vehicule();
 echo 'Vehicule2 est de marque : ' . $vehicule2->getMarque() . '  et de 
 couleur ' . $vehicule2->getCouleur() . '<hr>'; //BMW noir

 $vehicule3 = new Vehicule(rouge); // on modifie un element de l'objet qui va impacter que celui-ci
 echo 'Vehicule3 est de marque : ' . $vehicule3->getMarque() . '  et de 
 couleur ' . $vehicule3->getCouleur() . '<hr>'; //BMW rouge

 $vehicule4 = new Vehicule();
 echo 'Vehicule4 est de marque : ' . $vehicule4->getMarque() . '  et de 
 couleur ' . $vehicule4->getCouleur() . '<hr>'; //BMW noir

 $vehicule5 = new Vehicule();
 $vehicule5->setMarque('Renault'); // on modifie un element de la class, cela va impacter les objets suivants
 echo 'Vehicule5 est de marque : ' . $vehicule5->getMarque() . '  et de 
 couleur ' . $vehicule5->getCouleur() . '<hr>'; //BMW

 $vehicule6 = new Vehicule();
 echo 'Vehicule3 est de marque : ' . $vehicule6->getMarque() . '  et de 
 couleur ' . $vehicule6->getCouleur() . '<hr>'; //BMW






