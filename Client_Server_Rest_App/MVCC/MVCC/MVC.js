/****SUJET */
button_sumbit = document.querySelector(".submit")

button_sumbit.addEventListener("click",function(){
    nom_produit = document.querySelector(".nom_produit").value
    choix = document.getElementById("choixLivraison")
    valeur_selection = choix.options[choix.selectedIndex].value
    console.log("hh" + nom_produit)
    programme_principale(valeur_selection,nom_produit)
   
})


function programme_principale(choix,nomprod){
    strategy_choix = new ChoixLivraison()
    strategy1 = new Ups() ///Objet de strategie 1
    strategy2 = new Fedex() ///Objet de strategie 2
    strategy3 = new Chronopost()/////Objet de strategie 3
    switch (choix) {
        case "ups":
            strategy_choix.setStrategy(strategy1) ////<------Affectez Strategy1
        break;
        case "fedex":
            strategy_choix.setStrategy(strategy2)  ////<------Affectez Strategy2
        break;
        case "chronopost":
            strategy_choix.setStrategy(strategy3)  ////<------Affectez Strategy2
        break;
           
        default:
            console.log("Attention ! il faut voir un choix valid")
            break;
    }
    /*****OBSERVATEEUR */
    objet_modele = new Boutique()
    abonne1 = new Abonne()
    objet_modele.ajouterAbonne(abonne1)


    /***A LA FIN DU CHOIX */
    strategy_choix.Calculer(objet_modele,nomprod)
}



class Boutique{           
    liste_abonnes = []
    nomProd
    Prix_livraison
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
            objet.display(this.nomProd,this.Prix_livraison)
        }
    }

    augmenterNbrProd(nomProd,Prix_livraison){
        this.nomProd = nomProd
        this.Prix_livraison = Prix_livraison
        this.NotifeAbonnes()
    }
}

/****ABONNE****/
class Abonne{

    display(params,params2) {
       document.getElementById("input").innerHTML = "Votre produit est " + params + "  Prix_Livraison est :" + params2
    }
}



/*******STRATEGY */


class ChoixLivraison{
    strategy ////eut etre un objet de la classe Quack , peut etre un objet de class nonQuack
    setStrategy(objet_strategy){
        this.strategy = objet_strategy ///<-----Affectation
    }
    Calculer(objet_modele,nomprod){
        ////ENTRAIN DE CHANGER LETAT DU MODELE///
        this.strategy.Calculer(objet_modele,nomprod)  /////this.strategy peut etre un objet de la classe Quack peut etre un objet de classe non Quack//       
    }
}
class Ups{ ///Strategy 1
    Calculer(objet_modele,nomprod){
        ////ENTRAIN DE CHANGER LETAT DU MODELE///
        objet_modele.augmenterNbrProd(nomprod,"5£")
        console.log("5")
    }
}

class Fedex{///Strategy 2
    Calculer(objet_modele,nomprod){
        ////ENTRAIN DE CHANGER LETAT DU MODELE///
        objet_modele.augmenterNbrProd(nomprod + "10£")
        console.log("10")
    }
}
class Chronopost{///Strategy 2
    Calculer(objet_modele,nomprod){
        ////ENTRAIN DE CHANGER LETAT DU MODELE///
        objet_modele.augmenterNbrProd(nomprod + "8£")
        console.log("8")
    }
}




