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
            <form action="../controller/userController.php" method="post">
                <div>
                    <label for="monnom">Nom</label>
                    <input type="text" name="nom" id="monnom" placeholder="Mettez un nom" autofocus required>
                </div>

                <div>
                    <label for="monmdp">Mot de passe</label>
                    <input type="password" name="mdp" id="monmdp" placeholder="Votre mot de passe" required>
                </div>
<!-- Allez voir dans le controller se qui se passe lorsqu'on soumet le formulaire : if (isset($_POST['connexion'])) {} -->
                <input type="submit" name="connexion">
            </form>
        </section>
    </main>
    <footer></footer>
</body>

</html>