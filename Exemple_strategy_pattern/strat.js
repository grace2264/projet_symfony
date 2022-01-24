class ComportementQuack{
    strategy ////Peut etre un objet de la classe Quack , peut etre un objet de class nonQuack
    setStrategy(objet_strategy){
        this.strategy = objet_strategy ///<-----Affectation
    }
    Quack(){
        this.strategy.Quack()  /////this.strategy peut etre un objet de la classe Quack peut etre un objet de classe non Quack//       
    }
}
class Quack{ ///Strategy 1
    Quack(){
        console.log("QUAAAAAAAAAAAAAAACk")
    }
}

class Non_Quack{///Strategy 2
    Quack(){
        console.log("JE FAIS PAS DU QUACK")
    }
}



function programme_principale(choix){
    strategy_choix = new ComportementQuack()
    strategy1 = new Quack() ///Objet de strategie 1
    strategy2 = new Non_Quack() ///Objet de strategie 2
    switch (choix) {
        case "Canard_domestique":
            strategy_choix.setStrategy(strategy1) ////<------Affectez Strategy1
        break;
        case "Canard_colvert":
            strategy_choix.setStrategy(strategy2)  ////<------Affectez Strategy2
        break;
           
        default:
            console.log("Attention ! il faut voir un choix valid")
            break;
    }

    /***A LA FIN DU CHOIX */
    strategy_choix.Quack()
}


programme_principale("Canard_colvert")
