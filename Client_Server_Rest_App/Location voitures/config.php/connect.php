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

    ?>