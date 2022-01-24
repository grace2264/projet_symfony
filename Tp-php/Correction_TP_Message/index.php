<?php require_once('bdd.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>tp_message</title>
</head>
<body>
    <?php
    echo "<pre>"; print_r(get_class_methods($pdo)); echo "</pre>";
    if(isset($_POST['valider']))
    {
        /*
            @trim
            Supprimer les espaces en début et fin de chaine.
        */
        $pseudo = trim($_POST['pseudo']);
        $message = trim($_POST['content']);

        /*
        @str_replace
        cherche un element dans une chaine pour la remplacer par autre chose.
        */
        $search = array("'");
        $content = str_replace($search, "", $message);

        $request = $pdo->prepare("INSERT INTO message message VALUES (NULL, :pseudo, :message, now())");
        $request->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $request->bindParam(':message', $content, PDO::PARAM_STR);
        $request->execute();
    }
    $req = $pdo->prepare("SELECT * FROM message");
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);

    /*
    Exemple sans FETCH_ASSOC
        [0] => pseudo
        [pseudo] => pseudo
        [1] => message
    Exemple avec FETCH_ASSOC
        [pseudo] => pseudo
        [message] =>
    */
    
    ?>
    <?php foreach($result as $values): ?>
        <?php echo $values['pseudo']; ?> : <?= $values['message']; ?>
    <?php endforeach; ?>
    

    <form method="POST">
        <label>pseudo :</label>
        <input type="text" name="pseudo" placeholder="pseudo">
        <label>Message :</label>
        <textarea name="content"></textarea>
        <button name="valider">valider</button>
    </form>

</body>
</html>