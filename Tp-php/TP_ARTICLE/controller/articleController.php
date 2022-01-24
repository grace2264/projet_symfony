<?php
require_once('../config/bdd.php');
ini_set('display_errors', '1');

if(isset($_POST['valider'])){
  post($_POST, $pdo);
}

function post($values, $pdo) // values = contenu de $_POST
{
  $req = $pdo->prepare("INSERT INTO articles VALUES (NULL, :product_name, :content, :category,:path,:price, 1, now())");
  $req->bindParam(':product_name', $values['product_name'], PDO::PARAM_STR);
  $req->bindParam(':content', $values['content'], PDO::PARAM_STR);
  $req->bindParam(':category', $values['category'], PDO::PARAM_STR);
  $req->bindParam(':path', $values['url_picture'], PDO::PARAM_STR);
  $req->bindParam(':price', $values['price'], PDO::PARAM_INT);
  $req->execute();
}

function getAllArticle($pdo)
{
    $req = $pdo->prepare('SELECT * FROM articles');
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
}
$arrayAllArticle = getAllArticle($pdo);
//var_dump($arrayAllArticle);