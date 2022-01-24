<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly</title>
</head>
<body>
    <?php
        //    var_dump($_POST);
        if(isset($_POST['valider']))   {
            if($_POST['password'] === $_POST['confirm_password'])
            {
                echo "Bonjour" . $_POST ['pseudo'];
            }
            else{
                echo "ne sont pas identiques.";
            }
        }
    
    ?>
  <form method="post">
    <label for="">Pseudo</label>
    <input type="text" placeholder="pseudo" name="pseudo">
    <label for="">Password</label>
    <input type="password" name="password">
    <label for="">Confirm password</label>
    <input type="password" name="confirm_password">
    <button>Valider</button>


  </form>  
</body>
</html>