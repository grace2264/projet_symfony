<?php 
$user = 'root';
$pass = '';

$db = 'testdb';
$conn  = new mysqli('localhost', $user,$pass, $db,"3306") or die("Unable to connect");
echo "C'est connecte";
?>