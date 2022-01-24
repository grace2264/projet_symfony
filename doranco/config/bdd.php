<?php
/**
 * ? Modifiez le username et le password si vous n'avez pas les mêmes!
 */
$servername = "localhost";
$username = "root";
$password = "root";

/**
* * Nous faisons une connection à la BDD grâce à la class PDO
* ! Nous devrons donc utiliser les methodes PDO pendant tout le projet et NON mysqli!!!
*/
try {
    $conn = new PDO("mysql:host=$servername;dbname=doranco", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}