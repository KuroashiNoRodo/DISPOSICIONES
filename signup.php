<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      header('Location: index.php?mensaje=creado');
    } else {
      header('Location: signup.php?mensaje=error');
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
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <?php require 'header3.php' ?>

  <?php 
  
  
  if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Correcto </strong>Nuevo usuario creado
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
    margin-top:2%;
    height:400px;
    ">
    <div
    style="left:28%;
    top:3%;
    position:relative;">
    <h1 style="color: white;">Crear cuenta</h1>
    </div>
    
    <!-- <span style="color: white;" >o <a style="color: white;" href="login.php">Login</a></span> -->

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Usuario">
      <input name="password" type="password" placeholder="Contraseña">
      <input name="confirm_password" type="password" placeholder="Confirmar contraseña">
      <div style="left:20%;
    top:3%;
    position:relative;
      ">
      <input type="submit" value="Registrar">
      </div>
    </form>
    </div>
  </body>
</html>
