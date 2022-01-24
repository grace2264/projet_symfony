<?php

class Etudiant
{

    private $prenom;

    public function __construct($arg)
    {
        echo "Instanciation, nous avons reçu l'information suivante : $arg";

        $this->setPrenom($arg);
    }

    public function setPrenom($arg)
    {
        $this->prenom = $arg;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
}

// -----------------
$etudiant = new Etudiant("Momo"); // quand une class contient un constructeur, celui-ci est
exécuté automatiquement lors de l'instanciation (dès que l'on fait un new)
// $etudiant->setPrenom("Momo"); // pas besoin de faire appel au setPrenom() car cela est deja
prévu dans le constructeur __construct()
echo $etudiant->getPrenom() . '<br/>';

/*********
 __construct est une méthode magique qui s'exécute automatiquement
 */