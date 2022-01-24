<?php
include_once '../controller/userController.php';
?>
<!-- Le fichier inscription est un formulaire, il contient donc la balise form ainsi que la methode POST -->
<!-- Il contient également un bouton submit nécessaire à l'envoi du formulaire  -->
<!-- Puisque la methode déclaré est POST, les variables se recupèrent grâce au tableau de superglobales $_POST -->
<!-- On recupère les valeurs des inputs après que le formulaire soit soumis grâce à l'attribut name present sur chaque input -->
<!-- nous avons ici 4 inputs qui ont pour names: name="nom", name="prenom", name="mdp", name="inscritpion" -->
<!-- vous pourrez donc récupérer leur contenu grâce au tableau $_POST: $_POST['nom'], $_POST['prenom'], $_POST['mdp'], $_POST['inscription'],  -->
<!-- Nous avon inclus en haut du fichier le userController, allez voir ce qui se passe lorsqu'on appuye sur le bouton inscription -->
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
            <form action="#" method="POST">
                <div class="champ">
                    <label for="myname">Nom</label>
                    <input type="text" name="nom" id="myname" placeholder="Ajoutez un nom" autofocus required>
                </div>

                <div class="champ">
                    <label for="monprenom">Prenom</label>
                    <input type="text" name="prenom" id="monprenom" placeholder="Ajoutez un prenom" required>
                </div>

                <div class="champ">
                    <label for="monmdp">Mot de passe</label>
                    <input type="password" name="mdp" id="monmdp" placeholder="Votre mot de passe" required>
                </div>

<!-- Allez voir dans le controller se qui se passe lorsqu'on soumet le formulaire : if (isset($_POST['inscription'])) {} -->
                <input type="submit" name="inscription">
            </form>
        </section>
    </main>
    <footer></footer>
</body>

</html>