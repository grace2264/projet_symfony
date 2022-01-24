1. Création d'un véhicule 1
2. Attribuer un nombre de litres d'essence au vehicule 1 : 5
3. Afficher le nombre de litres d'essence du vehicule 1
4. Création d'une pompe
5. Attribuer un nombre de litres d'essence à la pompe : 800
6. Afficher le nombre de litres d'essence de la pompe
7. la pompe donne de l'essence en faisant le plein (50L) à la voiture1
8. Afficher le nombre de litres d'essence pour la voiture1 aprés ravitaillement
9. Afficher nombre de litres d'essence restant pour la pompe
10. Faire en sorte que le véhicule ne puisse pas contenir plus de 50L d'essence (limite reservoir).

<?php

class Vehicule
{
    private $litresEssence;

    public function setlitresEssence($litres)
    {
        if(is_int($litres))
        {
            $this->litresEssence = $litres;
        }
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }
}
//-----
class Pompe
{
    private $litresEssence;
    public function setlitresEssence($litres)
    {
        if(is_int($litres))
        {
            $this->litresEssence = $litres;
        }
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    //7)
    public function donnerEssence(Vehicule $v)// on exige un argument de type Vehicule
     {
        // on cherche à deduire le nombre de litre d'essence, qu'on attribut au vehicule, de la pompe
        $this->setLitresEssence( $this->getLitresEssence() - (50 - $v->getLitresEssence()) );
        // on cherche a faire le plein du vehicule qui est max 50, donc ne pas oublier ce qu'il y a déja dans le vehicule
        $v->setlitresEssence( $v->getLitresEssence() + (50 - $v->getLitresEssence()) );
     }
}

//----------------------------------
//1)
$vehicule1 = new Vehicule();
//2)
$vehicule1->setlitresEssence(5);
//3)
echo 'le vehicule1 posséde : ' . $vehicule1->getLitresEssence() . ' litres d\'essence <br/>';
//4)
$pompe = new Pompe();
//5)
$pompe->setlitresEssence(800);
//6)
echo 'la pompe posséde : ' . $pompe->getLitresEssence() . ' litres d\'essence <br/>';
//7)
$pompe->donnerEssence($vehicule1);
//8)
echo "Aprés avoir fait le plein, le vehiule1 posséde : " . $vehicule1->getLitresEssence() . ' litres d\'essence <br/>';
//9) 
echo "Apres avoir fait le ravitaillement, la pompe possede : " . $pompe->getLitresEssence() . " litres d'essences <br/>"; 
//10) voir la fonction donnerEssence dans la class Pompe



/************************
---------------------
|    Vehicule		|
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence()    	|
|getlitresEssence()		|
---------------------

---------------------
|    Pompe   		|
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence()    	|
|getlitresEssence()		|
|donnerEssence()	|
---------------------
***********************/

   