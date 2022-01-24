<?php

final class Application
{
    public function lancementApplication()
    {
        return "l'application se lance...";
    }
}

//class Extension extends Application{} // erreur, on ne peut pas hériter d'une class finale
$app = new Application(); // la class reste instanciable

class Application2
{
    final public function lancementApplication()
    {
        return "l'application se lance...";
    }
}
class Extension2 extends Application2
{
    // public function lancementApplication(){} // erreur, je ne peux surcharger ou redefinir la
    //methode lancementApplication() car elle est final dans la class mère     
}

$ext2 = new Extension2();
echo $ext2->lancementApplication(); // affiche "l'application se lance..."

/*****************
 *  - une class final ne peut pas être héritée
 *  -une class final aura forcément des methodes qui ne pourront pas être surchargées ou
 *  redéfinies (sinon aucun intérêt)
 *  - une class final peut comporter des méthodes normales (cela n'a aucun intérêt car on ne peut pas hériter
    * d'une class final et donc il n'y a aucun risque que les méthodes soient
    * redéfinies)
 *  - une class final reste instanciable 
 *  - une methode final peut être présente dans une class qui ne l'est pas
 *  - une methode final permet d'éviter qu'elle soit redéfinie ou surchargée. 
 */



