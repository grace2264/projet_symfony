<?php
include_once "./db.php";
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Origin: *");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    signup();
}

if($_SERVER_METHOD['REQUEST_METHOD'] == "POST"){
    signup();
}
function login(){

function signup(){
    http_response_code(200)
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $rPwd = $_POST['rPwd'];
    if(empty($fname) || empty($lname) || empty($userName) || empty($email) || empty($pwd) || empty($rPwd)){
        http_response_code(400);
        echo "IL FAUT REMPLIR TOUT"
        exit();
    }
    if($pwd != $rPwd){
        http_response_code(400)
        echo "Verifier le code";
    }
    $sql ="INSERT INTO users (first_name,last_name,user_name,email,pwd,rPwd);
    $stmt = $conn->stmt_init();

    if(!$stmt->prepare($sql)){
        http_response_code(400);
        echo "BAD SQL REQUEST";
   
}
    $stmt->bind_param('ssssss',$fname,$lname,$user_name,$email,$pwd,$rPwd);
    $stmt->execute();
    if($stmt->affected_rows > 0 ){
        http_response_code(200);
        echo "BRAVO";
        exit();
}
function login($conn){
    $userName = $_POST["userName"];
    $pwd = $_POST["pwd"];
    $sql = "select pwd from users where user_name =?;";
    $stmt = $conn->stmt_init();
    if( !$stmt->prepare($sql)){
        http_response_code(400);
        echo "BAD SQL REQUEST";

}

?>