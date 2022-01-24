<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLY</title>
</head>
<body>
<h2>Bonjour Francis</h2>
<form action="" method="post">
    <div>
        <label for="name">Pseudo :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="password">Password :</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <label for="password2">Confirmez Password :</label>
        <input type="password" id="password2" name="password2">
    </div>
    <div>
        <input type="submit" id="submit" name="submit">
    </div>  
</form>

<?php
    if ($_POST["submit"]){
        if ($_POST["password"] == $_POST["password2"]){
            echo "Bonjour" . $_POST["user_name"];
        }
    } else {
        echo "faux";
    }

?>

</body>
</html>