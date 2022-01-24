<?php
class Singleton
{
    public $numero = 2;
    private static $instance = null;
    private function __construct(){}// le constructeur est en private, la class n'est pas instanciable

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

}
//-----------------------
// $objet = new Singleton(); // la class n'est pas instanciable

$objet1 = Singleton::getInstance();
var_dump($objet1);

$objet2 = Singleton::getInstance();
var_dump($objet2);

$objet3 = Singleton::getInstance();
var_dump($objet3);
echo '<hr>';
echo $objet1->numero . '<hr>';//20
echo $objet2->numero . '<hr>';//20
$objet1->numero = 21;//affectation
echo $objet1->numero . '<hr>';//21
echo $objet2->numero . '<hr>';//21

