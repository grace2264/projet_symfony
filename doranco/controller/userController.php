<?php
include_once '../config/bdd.php';
include_once '../model/User.php';

$user = new User();

/**
 * ? Lorsqu'on appuye sur le bouton qui à pour name="inscription" on rentre dans ce if()
 */
if (isset($_POST['inscription'])) {
    /**
     * ? On recupere le champs qui a pour name="mdp" grâce à $_POST['mdp']
     * * On utilise une fonction PHP qui hash le mot de passe: password_hash()
     * ! car on ne doit jamais mettre en dur un mot de passe dans une base de données
     */
    $_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    /**
     * * Nous avons créé plus haut un objet de type User ($user = new User();)
     * * Nous appelons la methode inscription de la Class User
     * ? Allez voir à quoi ressemble la class User et ce que fait cette method
     */
    $user->inscription($conn, $_POST);
    header("Location:../view/connexion.php");
}

/**
 * ? Lorsqu'on appuye sur le bouton submit du formulaire qui a pour valeur name="connexion" on rentre dans ce if()
 * ! Nos connexion regarde si l'utilisateur existe en BDD mais ne fait rien
 * * Il faudrait ensuite ou mettre les variables en $_SESSION ou faire ce que vous avez décidé
 */
if (isset($_POST['connexion'])) {
    /**
     * * On va voir en base de données si on récupère une valeur avec la valeur name="nom" du formulaire
     * * On utilise donc $conn et $POST['nom'] en parametre de la fonction selectionnerUnUtlisateur()
     * ? Elle nous retourne une ligne de notre BDD s'il existe
     */
    $utilisateur = $user->selectionnerUnUtlisateur($conn, $_POST['nom']);

    /*
    * Si l'utilisateur n'existe pas on affiche un message
    */
    if ($utilisateur === false) {
        echo "personne n'a ce nom!";
        /**
         * * Sinon on regarde si le mot de passe rentré dans le formulaire correspond au mot de passe hasché dans la BDD
         * ? Grace à la method PHP password_verify()
         * * Si c'est le cas on est renvoyé vers la page d'accueil grâce a la fonction header('Location:     ');
         */
    } else if (password_verify($_POST['mdp'], $utilisateur->mot_de_passe)) {
        header("Location:../index.php");
    } else {
        echo "le mot de passe n'est pas correct";
    }
}

/**
 * ? Lorsqu'on appuye sur le bouton submit du formulaire qui a pour valeur: name="modifier" on rentre dans ce if()
 */
if (isset($_POST['modifier'])) {
    $user->modifier($conn, $_POST);
    header("Location:afficher.php");
}

/**
 * ? Lorsqu'on appuye sur le lien <a href="userController.php?delete=<php echo $user->id_personne; ?>">
 * * On recupère l'id grace à $_GET['delete'], à qui on a passé l'ID de l'utilisateur à supprimer
 * * On rentre dans ce if() si $_GET['delete'] est present, quand il est envoyé dans l'url: ?delete=
 * * On supprime un utilisateur grâce à notre method ->supprimer
 * * On est renvoyé vers la page afficher.php grâce à header('Location:   ')
 */
if (isset($_GET['delete'])) {
    $user->supprimer($conn, $_GET['delete']);
    header("Location:../view/afficher.php");
}

/**
 * * Regardez le code au dessus sans les commentaires est tout petit!
 */

// if(isset($_POST['inscription'])) {
//     $_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
//     $user->inscription($conn, $_POST);
//     header("Location:../view/connexion.php");
// }

// if(isset($_POST['connexion'])) {
//     $utilisateur = $user->selectionnerUnUtlisateur($conn, $_POST['nom']);
//     if ($utilisateur === false) {
//         echo "personne n'a ce nom!";
//     } else if (password_verify($_POST['mdp'], $utilisateur->mot_de_passe)) {
//         header("Location:../index.php");
//     } else {
//         echo "le mot de passe n'est pas correct";
//     }
// }

// if(isset($_POST['modifier'])) {
//     $user->modifier($conn, $_POST);
//     header("Location:afficher.php");
// }

// if(isset($_GET['delete'])) {
//     $user->supprimer($conn, $_GET['delete']);
//     header("Location:../view/afficher.php");
// }