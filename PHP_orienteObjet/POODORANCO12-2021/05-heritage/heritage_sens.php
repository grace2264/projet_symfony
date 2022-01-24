<?php
class A
{
    public function test()
    {
        return "test1";
    }
        protected function test1()
        {
            return "test1";
        }
}

class B
{
    public function test2()
    {
        return 'test2';
    }
}
class C
{
    public function test3()
    {
        return "test3";
    }
}
//------------
$c = new C();
echo $c->test3() . '<br>';// affiche test3
echo $c->test3() . '<br>';// affiche test2 car C hérite de B
echo $c->test3() . '<br>';// affiche test1 car C hérite de B
echo $c->test4() . '<br>';// la class C hérite de la methode test4() de la class A, mais ne peux pas y acceder 
//directement car elle est en protected et est  en dehors de la class

/****************
 * Si C hérite de B
 *      ......... B hérite de A
 *               ......... alors C hérite de A
 */
