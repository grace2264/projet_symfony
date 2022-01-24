<?php 
class A
{
    public function calcul()
    {
        return 10;
    }
}
//----------
class B extends A
{
    public function calcul()
    {
        $nb = parent::calcul();// surcharge "override". je n'utilise pas $this->calcul() sinon l'exécution sera récursive et la méthode s'appelera en boucle.
        // parent permet d'appeler une méthode d'une class parente lors d'une surcharge

        if($nb<= 100)
        {
            return "$nb est inferieur ou égal à 100";
        }else{
            return "$nb est superieur à 100";
        }
    }

    public function autreCalcul()
    {
        $nb = parent::calcul();// il est possible d'atteindre une méthode de mon parent même s'il n'y pas de redéfinition, ici nous accédons à la méthode calcul() du parent (class A)
        $nb2 = $this->calcul(); // ici le $this fait référence à l'objet en cours donc ça sera la méthode calcul() de la class B 
    }
}
//---------------
$objetB = new B();
echo $objetB->calcul();

