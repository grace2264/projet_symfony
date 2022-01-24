class choix_entreprise
{
    strategy 
    setStrategy(objet_strategy){
        this.strategy = objet_strategy ///<-----Affectation
    }
    Calculer(){
        this.strategy.Calculer()       
    }
}
class Ups{ ///Strategy 1
    Calculer(){
        console.log("Prise en charge par UPS pour 35$")
    }
}

class Fedex{///Strategy 2
    Calculer(){
        console.log("Prise en charge par Fedex pour 20$")
    }
}

class Usps{///Strategy 3
    Calculer(){
        console.log("Prise en charge par USPS pour 50$")
    }
}




function simulateur(choix){
    strategy_choix = new choix_entreprise()
    strategy1 = new Ups() ///Objet de strategie 1
    strategy2 = new Fedex() ///Objet de strategie 2
    strategy3 = new Usps() ///Objet de strategie 3
    switch (choix) {
        case "UPS":
            strategy_choix.setStrategy(strategy1) ////<------Affectez Strategy1
        break;
        case "FEDEX":
            strategy_choix.setStrategy(strategy2)  ////<------Affectez Strategy2
        break;
        case "USPS":
            strategy_choix.setStrategy(strategy3)  ////<------Affectez Strategy2
        break;
           
        default:
            console.log("Attention ! Choix non valide")
            break;
    }

    /***A LA FIN DU CHOIX */
    strategy_choix.Calculer()
}


simulateur("UPS")


