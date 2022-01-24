<?php

interface Mouvement
{
    public function deplacement();
}
//-------
class Bateau implements Mouvement // class Bateau extends Mouvement = erreur, on ne peut pas hériter d'une interface mais on l'implemente
{
    public function deplacement(){} // obligation de recréer les methodes de l'interface qu'on implemente pour eviter les erreurs
}

//--------
class Avion implements Mouvement
{
    public function deplacement(){}
}
//-----
// $mouvement = new Mouvement(); // erreur, une interfae n'est pas instanciable

/******
    - une interface comporte une liste de methodes (public) sans contenu qui permet de garentir que toutes les classe qui implemente l'interface, contiendera forcément les methodes de cette derniere avec la même signature (même nom)
    - une interface n'est pas instanciable
    - l'interface permet de représenter un point commnun entre deux ou plusieurs class, cela permet d'exiger un comportement
        Bateau hérite de Vehicule
        Avion hérite de Vehicule
        Voiture hérite de Vehicule
        Bateau, avion et voiture on un point commun , le deplacement(Mouvement)
    - une interface ne peut pas contenir de propriétés
    - une class peut implementer plusieurs interfaces
 */

 // exemple plusieurs interfaces
 interface iA
 {
     public function test1();
 }
 interface iB{
     public function test2();
 }

 class A implements iA, iB
 {
    public function test1(){}
    public function test2(){}
 }

 //---------------------
 interface iC
 {
     public function test1();
 }
 interface iD
 {
     public function test2();
 }
 interface iE extends iC, iD
 //héritage multiple entre interface (attention ceci n'est pas possible avec les class)
 {
    public function test3();
 }
 class B implements iE
 {
    public function test1(){}
    public function test2(){}
    public function test3(){}
 }
 //-----------------
 // héritage + implementation simultané
 class C{}

 class D extends C implements iA
 {
     public function test1(){}
 }


