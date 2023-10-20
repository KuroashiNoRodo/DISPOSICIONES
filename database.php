<?php

// $server = 'localhost:3306';
// $username = 'root';
// $password = '';
// $database = 'didisee';
$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'didisee';

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}


try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

// function conectar(){
//     $host="localhost";
//     $user="root";
//     $pass="";

//     $bd="didisee";

//     $con=mysqli_connect($host,$user,$pass);

//     mysqli_select_db($con,$bd);

//     return $con;
// }

?>
