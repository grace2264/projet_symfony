<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP_message</title>
</head>
<body>
<form method="post">
        <label for="">Pseudo</label>
        <input type="text" placeholder="pseudo" name="pseudo" >
        <label for="">message</label>
        <input type="text" name="message">
        <button name="valider">Valider</button>
    </form>

<?php

$servername = 'localhost';
$pseudo = 'root';
$password = '';

$conn = new PDO("mysql:host=$servername;dbname=mini_tpMessage", $pseudo, $password);


if(isset($_POST['valider'])){
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];
    echo '<h3>Les informations récupérées en utilisant POST</h3>';
    echo 'pseudo : ' . $pseudo . ' message : ' . $message;

}

?>



</body>
</html>