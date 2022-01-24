<?php

const HOST = "localhost";
const DATABASE = "boutique";
const USERNAME = "root";
const PASSWORD = "";

try{
  $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE . "", USERNAME, PASSWORD,
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch(PDOException $error){
  echo "Probleme connexion : " . $error->getMessage();
}

?>