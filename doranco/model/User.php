<?php

/**
* ? Cette Class implement un CRUD (Create, Read, Update, Delete)
* * Elle contient 1 method pour inserer un utilisateur dans la base de données (CREATE)
* * 3 method pour récupérer(READ) :
* * Tous les utilisateurs OU un utilisateur d'après son nom OU un utilisateur d'après son ID
* * 1 method pour modifier un utilisateur en BDD (UPDATE)
* * 1 method pour supprimer en BDD (DELETE)
* ? Sans commentaire chaque method ne fait que qq lignes
*/
class User
{
    /**
    * ? Une requete avec la method PDO se fait en 3 étapes :
    * * On utlise la methode prepare grâce à l'objet PDO $conn que l'on a créé lors de la connexion à la BDD
    * * nous pourrons le récuperer car le controller fera un include de la BDD, là où ces fonctions seront appelés
    * * On utilise la method bindParam grâce à la variable que nous a renvoyé la methode ->prepare dans $stmt
    * * bindParam consiste à dire par quelle variables seront remplacés les arguments :var dans la requete SQL
    * * execute se charge d'executer la requete
    * ! Nous passons en parametre $values qui est un tableau $values['nom'], ...
    * ! il faudra donc que ['nom'], ['prenom']... correspondent aux names de vos inputs récupéré par $_POST
    * ! car dans notre controller on utilisera $_POST
    */
    function inscription($bdd, $values)
    {
        $stmt = $bdd->prepare("INSERT INTO personne (nom, prenom, mot_de_passe) VALUES (:var1, :var2, :var3)");
        $stmt->bindParam(':var1', $values['nom']);
        $stmt->bindParam(':var2', $values['prenom']);
        $stmt->bindParam(':var3', $values['mdp']);

        $stmt->execute();
    }

    /**
    * ? Contrairement aux requêtes INSERT, UPDATE, DELETE, qui ne renvoient rien mais effectuent une action
    * ? La methode SELECT nous retourne des lignes de notres BDD
    * * nous rajoutons donc return à nos fonctions, ainsi que la method ->fetch()
    * * ->fetch() quand notre requete ne retourne qu'une seule ligne de la BDD
    * * ->fetchAll() quand nous attendons plusieurs lignes de la BDD
    * * ->fetch(\PDO::FETCH_OBJ) ici nous precisons que nous recuperons les lignes sous forme d'objet
    * ? Pour affihcer une colonne il faudra faire $var->nom ou $var->prenom ou $var->mot_de_passe
    * ? cela correspond au nom de nos colonnes en BDD
    * ? sans ça nous recupererions par default les lignes sous forme de tableau
    * ? il faudrait donc utiliser cette fois-ci $var['nom'], $var['prenom'], $var['mot_de_passe']
    * ! $var est un exemple ce sera le nom que vous donnerez à la variable quand vous appelez la method
    */
    function selectionnerUnUtlisateur($bdd, $var)
    {
        $stmt = $bdd->prepare("SELECT * FROM personne WHERE nom = :name");
        $stmt->bindParam(':name', $var);

        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    function afficherTousLesUtilisateurs($bdd)
    {
        $stmt = $bdd->prepare("SELECT * FROM personne");

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    function recupererById($bdd, $id)
    {
        $stmt = $bdd->prepare("SELECT * FROM personne WHERE id_personne= :id");
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function modifier($bdd, $values)
    {
        $stmt = $bdd->prepare("UPDATE personne
                                SET   nom          = :nom,
                                      prenom       = :prenom,
                                      mot_de_passe = :mdp
                                WHERE id_personne  = :id");

        /**
        * ? Petite nuance avec nos binParam précédents, on peut préciser comme ici le type de valeur attendu (c'est plus pro)
        * * INT, STRING, BOOLEAN... : \PDO::PARAM_INT ou \PDO::PARAM_STR ...
        */
        $stmt->bindParam(':id', $values['id'], \PDO::PARAM_INT);
        $stmt->bindParam(':nom', $values['nom'], \PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $values['prenom'], \PDO::PARAM_STR);
        $stmt->bindParam(':mdp', $values['mdp'], \PDO::PARAM_STR);

        $stmt->execute();
    }

    public function supprimer($bdd, $id): void
    {
        $stmt = $bdd->prepare("DELETE FROM personne
                                WHERE id_personne = :id");

        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);

        $stmt->execute();
    }
}
