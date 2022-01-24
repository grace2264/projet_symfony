<?php


    $pdo = null;
    $dsn = 'mysql: host=localhost; dbname=location voiture';
    $dbuser = 'root';
    $pw = '';

    try {
        $pdo = new PDO($dsn, $dbUser, $pw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    $pdo->query("SET NAMES UTF8");//Solution encodage UTF8
    return $pdo;

    if(isset($_POST['submit'])){ // Si le bouton valider a été enclenché

        if(isset['nom'], $_POST['prenom']{
            if($_POST['nom'] != "" && $_POST['prenom'] != ""){


                //Enregistrement en base de données

                $insertion = "INSERT INTO tab_voitures (nom, prenom) VALUES($_POST['nom'], $_POST['prenom'])";

                $execute = $pdo->query($insertion); //

                if($execute == true){
                    $msgSuccess = "Informations enregistrées avec succès";
                }else{
                    $msgError = "L'enregistrement n'a pu s'effectuer";
                }
            }
        })

    }

?>

<div>
    <?php

        if(isset($msgError)){ echo $msgError; }elseif (isset($msg)) {
            echo
        }



    ?>
</div>
<form action="formulaire_reservation.php" method="POST">

    <input type="text" name="nom" placeholder="Entrez votre nom">
    <input type="text" name="prenom" placeholder="Entrez votre prenom">

    <button type="submit" id="submit">Validez</button>

</form>