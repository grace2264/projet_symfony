<?php
class Animal
{
    protected function deplacement()
    {
        return 'je me deplace';
    }

    public function manger()
    {
        return 'je mange chaque jour';
    }
}

//-------
class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return 'je suis un elephant et ' . $this->deplacement();
    }
}
//---------------
class Chat extends Animal
{
    public function quiSuisJe()
    {
        return 'je suis un chat';
    }

    public function manger()// redefinition de la methode manger
    {
        return 'je mange comme un chat';
    }
}
//-----------------
$eleph = new Elephant();
echo 'elephant> '. $eleph->manger() . '<hr>';
echo 'elephant> ' . $eleph->quiSuisJe() . '<br>';
//echo $eleph->deplacement(); // erreur, car la fonction deplacement est en protected et donc, pas accessible à l'extérieur de la class
$chat = new Chat();
echo 'chat> ' . $chat->quiSuisJe() . '<br>';// affiche "je suis un chat"
echo 'chat> ' . $chat->manger() . '<br>';// affiche "je mange comme un chat"
/***
    Lorsqu'on appelle une methode sur un objet, l'interpreteur cherche d'abord dans la class
    dont l'objet est issue
 */

