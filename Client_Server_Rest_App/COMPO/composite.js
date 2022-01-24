/*
un nœud est un dossier, 
qui contient 
des dossiers ou fichiers

*/
class Noeud {
    enfants = []
    name
    
    ajouterEnfant(enft){
        this.enfants.push(enft)
    } 
    supprimerEnfant(argument){
        indice =this.enfants.indexOf(argument)
        delete this.enfants[indice] 
        this.enfants.length = this.enfants.length - 1 
    }

    RecupereEnfant(){
        return this.enfants
    }

    ChangerNom(name){
        this.name = name
    }

}

function parcour(Noeud){
    ///Combien d'enfant ??
    console.log(Noeud.name)
    var len = Noeud.enfants.length
    ///Parcourir la liste des enfants
    for(var i=0;i<len;i++){ i==len
       var enfant = Noeud.enfants[i] ///Sous-Dossier1 
               
        parcour(enfant)//<---2ém appel ////>----- parcour(sous-dossier1)
    
    }
}


///PARENT
Dossier = new Noeud()
Dossier.ChangerNom("Dossier_principale")
///ENFANT 2
sous_dossier1 = new Noeud()
sous_dossier1 .ChangerNom("Sous-Dossier1")

////ENFANT 1
sous_dossier2 = new Noeud()
sous_dossier2 .ChangerNom("Sous-Dossier2")


////Ajoutez enfant 1
Dossier.ajouterEnfant(sous_dossier1)


////Ajoutez enfant 2
Dossier.ajouterEnfant(sous_dossier2)


parcour(Dossier) //<----1er appel