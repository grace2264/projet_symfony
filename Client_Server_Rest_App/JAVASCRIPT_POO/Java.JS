/////////DECLARATION DES VARIABLES et OBJETS/////////

var x = 3
c = x
let y = 1
notes = [10,12,15] //<--- objet
notes_module = {
    id:0,
    nom_personne : "rachid",
    prenom_perssonne : "EDJEKOUANE"
}

console.log(notes_module.id)
/****SCOPE -------------------------*/
let g = "global"
function outer(){
    console.log(notes)
    let o = 'outer'
    function inner(){
        let i = "inner"
    }

    console(i)

}
//***********------------------- */




/*table personne 

|id|nom_personne|prenom_personne|
|0 | rachid | EDJEKOUANE|

Select nom from personne where nom_personne = "rachid"*/


///////////CREATION DES CLASSES////////////
class Personne{
    nom
    prenom
    constructor(nom,prenom){
        this.nom = nom  
        this.prenom = prenom
    }
    afficher_nom() {
        console.log(this.nom +"  "+ this.prenom)
    }
}

/******PERSONNE**************
 *   nom                          *
 *   prenom                       *
 *   afficher_nom                 *
 */


/******CREATION DES OBJETS */

rachid = new Personne("Rachid","EDJEKOUANE")

rachid.afficher_nom()
////////////////////AUTRE FACON////////////////////////

function Personne1(arg1,arg2) {
    this.nom = arg1
    this.prenom = arg2
    this.afficher_nom = function(){
        console.log(this.nom +"  "+ this.prenom)
    }
}

rach = new Personne1("Rachid","EDJEKOUANE") //**<---- Constructeur */

/******PERSONNE(arg1...)**************
 *      constructor(arg1)   *
 *       nom = arg1                *
 *                          *
 */

/////////TYPES DE FONCTIONS///////////////

function message(){
    console.log("helloo")
}
/****Fonctino annonyme */
message1 = function() {
    console.log("helloo")
}
/***ARrow fonction */
message2 = () => {
    console.log("hello")
}

/*********** */

/*Exercice : Essaie de créer une classe Circle avec une fonction draw qui affiche son radius  et son scale !
(avec 2 facons)*/

class Circle{
    radius
    scale
    constructor(r,s){
        this.radius = r
        this.scale = s
    }
    Afficher_Radius(){
        console.log(this.radius)
    }
    Afficher_Scale(){

    }
}

class Circle{
    radius
    scale
    constructor(r,s){
        this.radius = r
        this.scale = s
    }
   Draw(){
        console.log(this.radius)
         console.log(this.scale)
    }

} 
function Circlee(r,s){
    let radius = r
    let scale = s

    this.Draw = function(){
        console.log(radius)
        console.log(scale)
    }

}

/*****************  */
//********************HERITAGE**************** */

class Car {


    marque
    constructor(marque){
        this.marque = marque
    }
    afficher_nom_marque(){
        console.log(this.marque)
    }
}


class Android extends Phone{
    modele
    constructor(marque,modele){
        super(marque)
        this.modele = modele
    }

    show(){
        console.log(this.modele + this.marque)
    }
    afficher_nom_marque(msg){
        console.log(this.modele + " "+ msg + this.marque)
    }
}

Samsung = new Android("Samsung","Android")

Samsung.afficher_nom_marque()


