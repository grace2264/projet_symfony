<?php
include_once '../controller/userController.php';
echo  "<p>" . $_GET['id'] . " <- ceci est l'ID de mon utilisateur transmis dans l'URL au dessus de vous, par le lien a href de la page précedente, et récupéré ici grace à la variable \$_GET['id']</p>";
$utilisateur = $user->recupererById($conn, $_GET['id']);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>CRUD</title>
</head>

<body>
    <header></header>
    <main>
        <a href="../index.php">Retour à l'accueil</a>
        <section class="container">
            <form action="#" method="post">
                <div>
                    <label for="monnom">Nom</label>
                    <input type="text" name="nom" id="monnom" placeholder="Mettez un nom"
                        value="<?php echo $utilisateur->nom ; ?>" autofocus required>
                </div>

                <div>
                    <label for="monprenom">Prenom</label>
                    <input type="text" name="prenom" id="monprenom" placeholder="Mettez un prenom"
                        value="<?php echo $utilisateur->prenom ; ?>" required>
                </div>

                <div>
                    <label for="monmdp">Mot de passe</label>
                    <input type="password" name="mdp" id="monmdp" placeholder="Votre mot de passe"
                        value="<?php echo $utilisateur->mot_de_passe ; ?>" required>
                </div>

                <!-- On transmet ici dans un input de type caché l'id_personne car nous auront besoin  -->
                <!-- de la variable $_POST['id'] pour preciser quel utilisateur nous voulons modifier en BDD -->
                <input type="hidden" name="id" value="<?php echo $utilisateur->id_personne ; ?>" required>
                <!-- Allez voir dans le controller se qui se passe lorsqu'on soumet le formulaire : if (isset($_POST['modifier'])) {} -->
                <input type="submit" name="modifier">
            </form>
        </section>
    </main>
    <footer></footer>
</body>

</html>