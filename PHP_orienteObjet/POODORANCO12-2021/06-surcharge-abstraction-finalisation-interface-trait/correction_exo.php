<?php

abstract class Vehicule// 1)
{
    final public function demarrer() //2)
    {
        return "je demarre";
    }

    abstract public function carburant();//3)

    public function nombreDeTestsObligatoire()
    {
        return 100;
    }
}

class Peugeot extends Vehicule
{
    public function carburant()
    {
        return "essence";
    }

    public function nombreDeTestsObligatoire()//5)
    {
        return parent::nombreDeTestsObligatoire() + 70;
    }
}

class Renault extends Vehicule
{
    public function carburant()
    {
        return "diesel";
    }

    public function nombreDeTestsObligatoire()//4)
    {
        return parent::nombreDeTestsObligatoire() + 30;
    }
}

//---
//6)
$peugeot = new Peugeot();
echo 'Peugeot> ' . $peugeot->demarrer() .'<br/>';
echo 'Peugeot> ' . $peugeot->carburant() .'<br/>';
echo 'Peugeot> ' . $peugeot->nombreDeTestsObligatoire() .'<br/>';

echo '<hr>';

$renault = new Renault();
echo 'Renault> ' . $renault->demarrer() .'<br/>';
echo 'Renault> ' . $renault->carburant() .'<br/>';
echo 'Renault> ' . $renault->nombreDeTestsObligatoire() .'<br/>';