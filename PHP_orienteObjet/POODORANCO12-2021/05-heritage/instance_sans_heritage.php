<?php

class A
{
    public function direBonjour
    {
        protected function test4(){]
    }







}//------------
class B 
{
    public $maVariable;
    public function __construct()
    {
        $this->maVariable = new A;
    }
    public function uneMethode()
    {
        returne $this->maVariable->direBonjour();
    }
}
//----------
$b = new B();
echo $b->maVariable->direBonjour() . '<br>';
var_dump($b);
/**
    * nous avons un objet dans un objet, il n'y a pas d'héritage
 */