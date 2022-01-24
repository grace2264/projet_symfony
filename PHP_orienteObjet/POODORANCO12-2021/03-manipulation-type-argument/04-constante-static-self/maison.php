<?php

class Maison
{
    private static $nbPiece = 7; // appartient à la classe
    public $couleur = "blanc"; // appartient à l'objet
    public static $espaceTerrain = '500m2'; // appartient à la classe
    const HAUTEUR = '10m'; // appartient à la classe
    private $nbPorte = 10; // appartient à l'objet

    public static function getNbPiece()
    {
        return self::$nbPiece ; // le self fait référence à la classe Maison
    }

    public function getNbPorte()
    {
        return $this->nbPorte;
    }

}

echo 'nbPiece : ' . Maison::getNbPiece() . '<br/>'; // ok - j'appel un attribut de ma class par la class elle même 
echo 'espaceTerrain : ' . Maison::$espaceTerrain . '<br/>';
echo 'hauteur: ' . Maison::HAUTEUR . '<br/>';

$objet = new Maison();
echo 'couleur : ' . $objet->couleur . '<br/>';
echo 'nbPorte : ' . $objet->getNbPorte();

/*********************
    $objet->element : pour acceder à un element de l'objet à l'extérieur de la classe
    $this->element : pour acceder à un element de l'objet à l'intérieur de la classe
    class::element : pour acceder à un element de la class à l'extérieur de la classe
    self::element : pour acceder à un element de la class à l'intérieur ce celle-ci

    Questions à se poser :
        - Est-ce que l'element est static ?
            - Si oui (self::, class::)
                - est-ce que c'est dans la class
                    si oui, self::
                    sinon, class::
            - si non static ($objet->, $this->)
                - est-ce que c'est dans la class
                    si oui, $this->
                    sinon, $objet->



    Précausion :
        static indique qu'un element appartient à la class (dans le cas d'une propriété c'est une variable)
        const indique qu'un element à la class (dans le cas d'une propriété c'est une constant)

        différence entre define et const
            define permet de faire des constantes dans l'espace global
            const permet de faire des constantes de class

        différence entre const et static
            les 2 appartiennent à la class
            la constante (const) ne changera pas
            la static peut changer
 */