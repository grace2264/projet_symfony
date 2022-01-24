<?php
    
    function ajouter($nom, $desc,$image, $prix)
    {
        if(require("connexion.php"))
        {
            $req = $access->prepare("INSERT INTO vehicules (nom, description, image, prix_journalier) VALUES ("$nom, $desc, $image
            , $prix)");

            $req->execute(array($nom, $desc,$image, $prix));

            $req->closeCursor();
        }
    }

    function afficher()
    {
        if(require("connexion.php"))
        {
            re$access->prepare("SELECT * FROM vehicules ORDER BY id DESC");

            $req->execute();

            $data = $req->fetchAll(PDO::FETCH_OBJ);

            return $data;
            $req_>closeCursor();
        }
    
    }

    function supprimer($id)
    {
        if(require("connexion.php"))
        {
            $req=$access->prepare("DELETE * FROM vehicules WHERE id=?");

            $req->execute(array($id));


        }

    }

?>