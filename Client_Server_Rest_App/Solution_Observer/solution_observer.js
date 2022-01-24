/****SUJET */
class Meteo{           
    liste_abonnes = []
    temp
    ajouterAbonne(abonne){
        this.liste_abonnes.push(abonne)
    }
    supprimerAbonne(abonne){
        var  indice  = this.liste_abonnes.indexOf(abonne) 
        delete this.liste_abonnes[indice] 
        this.liste_abonnes.length--
    }

    NotifeAbonnes(){
        /**** 1-Parcourir la liste d'abonne
         *    2-Accedez a chaque objet dans la liste d'abonne  
         *    3-Chaque objet il faut appeler son fonction  
         */
        ///Parcourir la liste d'abonne
        for(var i=0;i<this.liste_abonnes.length;i++){
            var objet = this.liste_abonnes[i] //Accedez a chaque objet dans la liste d'abonne
            objet.display(this.temp)
        }
    }

    changerTemp(nouvelle_temp){
        this.temp = nouvelle_temp
        this.NotifeAbonnes()
    }
}

/****ABONNE****/
class Display{
    indice
    constructor(indice){
        this.indice = indice
    }
    display(params) {
        console.log(this.indice +" "+ params +"\n")
    }
}


/*PROGRAMMME PRINCIPALE*///
/****CREATION DES ABONNES */
display1 = new Display(1)
display2 = new Display(2)
display3 = new Display(3)
/** CREATION SUJET*/
meteo = new Meteo()
/***AJOUT Des abonnes */
meteo.ajouterAbonne(display1)
meteo.ajouterAbonne(display2)
meteo.ajouterAbonne(display3)

/****Ah !!! Temperature est changÃ© */

meteo.changerTemp("89")
