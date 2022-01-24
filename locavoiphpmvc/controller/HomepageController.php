<?php

namespace Locavoiphpmvc\Controller;

use Locavoiphpmvc\Model\Voiture;

class HomePageController
{
    //propriétés
    //on crée une propriété qui servira à instancier un la classe
    private$voiture;

    //constructeur
    public function __construct()
    {
        //on instancie la classe voiture
        $this->voiture = new Voiture;
    }
    public function voirToutesLesVoitures()
    {
        $voitures = $this->voiture->viewAllCars();

        require_once('view/frontView/homepage.php');
    }
}