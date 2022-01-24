<?php

const HOST = "localhost";
const DATABASE = "mini_tpmessage";
const USERNAME = "root";
const PASSWORD = "";

try{
  // arguments : 1 (serveur + base de données), 2 (username), 3 (mdp), 4 (options).
  $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE . "", USERNAME, PASSWORD,
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  // PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, Pour gerer les erreurs.
  // PDO::MYSQL_ATTR_INIT_COMMAND, pour l'encodage.
  // var_dump($pdo);
  // echo "<pre>"; print_r(get_class_methods($pdo)); echo "</pre>";
  // echo "succes";
} catch(PDOException $error){
  echo "Probleme connexion : " . $error->getMessage();
}

?>