<?php

/****************
 Exo : Au vu de cette class vous allez essayer de renseigner les attributs : pseudo et mdp en
 faisant en sorte que le pseudo doit-être obligatoirement de type string et que sa taille fasse
 entre 1 et 15 caractères
 */

 class Membre
 {
     private $pseudo;
     private $mdp;

     public function setPseudo($arg)
     {
         if(is_string($arg) && strlen($arg) <= 15 && strlen($arg) > 1)
            {
                $this->pseudo = $arg;
            }
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setMdp($arg2)
    {
        if(is_string($arg2))
        {
            $this->mdp = $arg2;
        }
    }
 }

 // -----------------------
 $membre1 = new Membre();
 $Membre1->setPseudo('toto');
 $membre1->setMdp("1234");
 echo 'le membre 1 : pseudo : ' . $membre1->getPseudo() . ' mdp => ' . $membre1->getMdp() . '<br/
 >';