<?php
include_once '../controller/userController.php';
?>
<!-- Cette fois nous ne sommes pas dans un formulaire! -->
<!-- 2 liens nous permettent d'aller modifier ou supprimer un utilisateur -->
<!-- Mais nos liens ont qq chose de plus que d'habitude -->
<!-- On rajoute un parametre en plus, un ?id= que l'ont pourra recuperer grace à $_GET['id'] -->
<!-- Allez voir les liens modifier et supprimer plus bas! -->
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
            <?php
        /*
        * On ouvre les balises PHP quand on en a besoin et on les referme pour utiliser HTML
        * On recupère tous les utilisateurs en BDD grace à notre methode afficherTousLesUtilisateurs()
        * presente dans la class User, nous n'avons pas besoin d'instancier l'objet $user = new User();
        * car cela est fait dans le controller et celui-ci est inclus en haut du fichier
        */
            $users = $user->afficherTousLesUtilisateurs($conn);

        /*
        * On fait une boucle pour afficher tous les utilisateurs présent dans notre BDD grace à la method PHP foreach()
        */
            foreach ($users as $user) {

            ?>
                <div class="card">
                    <p><?php echo $user->nom; ?></p>
                    <p><?php echo $user->prenom; ?></p>
                    <p><?php echo $user->mot_de_passe; ?></p>

        <!-- Le fichier afficher contient des lien pour modifier et supprimer chaque utilisateurs -->

        <!-- On passe en parametre l'id de l'utilisateur, regardez l'URL une fois le lien cliqué  -->
        <!-- On pourra récuperer cette valeur grâce à $_GET['id'], puisque c'est une variable dans l'URL -->
                    <a href="modifier.php?id=<?php echo $user->id_personne; ?>">
                        Modifier
                    </a>

        <!-- On passe en parametre l'id de l'utilisateur, le lien dirige vers le Controllleur directement  -->
        <!-- On pourra récuperer cette valeur grâce à $_GET['delete'], puisque c'est une variable dans l'URL -->
                    <a href="../controller/userController.php?delete=<?php echo $user->id_personne; ?>">
                        Supprimer
                    </a>
                </div>
            <?php
            }
            ?>
        </section>
    </main>
    <footer></footer>
</body>
</html>