class Chaine_Youtube {
    liste_abonne = []
    video
    AjouterAbonne(nomAbonne)
    {
        this.liste_abonne.push(nomAbonne)
    }
    supprimerAbonne(abonne){
        var  indice  = this.liste_abonne.indexOf(nomAbonne) 
        delete this.liste_abonne[indice] 
        this.liste_abonne.length--
    }
    NotifyAll(){
        for(var i=0;i<this.liste_abonne.length;i++){
            var objet = this.liste_abonne[i] 
            objet.display(this.video)
        }
}
changerVideo(nouvelle_video){
    this.video = nouvelle_video
    this.NotifyAll()
}

}


class Abonne 
{
    nomAbonne
    constructor(youtuber)
    {
        this.nomAbonne = youtuber
    }
    
    display(noAbonne) {
        console.log(this.nomAbonne +" "+ noAbonne +"\n")
    }
}

chaine = new Chaine_Youtube()

Alexis = new Abonne(1)
chaine.AjouterAbonne(Alexis)

Stam = new Abonne(2)
chaine.AjouterAbonne(Stam)

Rosita = new Abonne(3)
chaine.AjouterAbonne(Rosita)

Rebeca = new Abonne(3)
chaine.AjouterAbonne(Rebeca)

chaine.changerVideo()



//1-creer des objets de la class abonne et de la class chaine_Youtube
//2- Ajouter les abonnes dans la liste d'abonne de la chaine_Youtube (appeler la "fonction ajouterAbonne")
//3- On change l'etat de l'objet chaine_Youtube (appeler la fonction "changerVideo" => cette function va notifier tout les abonnés dans la liste abonne )



}