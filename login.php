<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /DIDISEE2');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /DIDISEE2/index.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html>
  <style>
    body{
      background-image: url('img/zyro-image (3).png');
      background-repeat:no-repeat;
      background-attachment: fixed;
      background-size:cover;

    }
  </style>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="partials/estilos.css">
    <link rel="stylesheet" href="partials/table.css"/>
    <link rel="icon" href="img/logo-removebg-preview (1).ico"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body >
  <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'creado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Correcto </strong>Alumno creado
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/DIDISEE2/listaAlu.php">
            <?php 
                }
            ?>   
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <div style="
    background:#3f3f3f; 
    width:40%; 
    margin: 0 auto; 
    border-radius:15px;
    margin-top:5%;
    height:400px;
    position:relative;
    ">
    <h1 style="color:white; text-align: center; " >DIDISEE
    <img src="img/logo2.png" style="width:30%; margin-top:2%;"></h1>
    

    <form action="login.php" method="POST">
      <div style="display:center ;">
      <input name="email" type="text" placeholder="Usuario">
      </div>
      
      <input name="password" type="password" placeholder="Contraseña">
      <div style="
      position: absolute;
      top: 70%;
      left: 19.9%;">
      <input type="submit" value="aceptar">
      </div>
      <div style="
      position: absolute;
      top: 80%;
      left: 40%;">
     <!-- <br> <span><a href="signup.php"style="color:white;text-align: center;" >Crear cuenta</a></span> -->
     </div>
    </form>
    </div>
  </body>
</html>
