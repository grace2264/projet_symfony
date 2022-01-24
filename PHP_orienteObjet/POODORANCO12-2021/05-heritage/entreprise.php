<?php

class Plombier
{
    public function getSpecialite()
    {
        return 'tuyaux, robinet, chauffe-eau, compteur...<hr>';
    }

    public function getHoraires()
    {
        return '8h/19h';
    }
}

//------
class Electricien
{
    public function getSpecialite()
    {
        return 'pose câbles, disjoncteurs, tableaux ou armoires électriques...<hr>';
    }
    public function getHoraire()
    {
        return '10h/18h';
    }
}
//-----
class Entreprise
{
    public $numero = 0;
    public function appelUnEmploye($employe)
    {
        $this->numero++;
        $this->{"monEmploye". $this->numero} = new $employe;
        // premiere fois : monEmploye1 = new Plombier();

        return $this->{"monEmploye". $this->numero};
    }
}
//-------------
$entreprise = new Entreprise();

$entreprise->appelUnEmploye("Plombier");
echo $entreprise->monEmploye1->getSpecialite();

$entreprise->appelUnEmploye("Electricien");
echo $entreprise->monEmploye2->getSpecialite();

var_dump($entreprise);


