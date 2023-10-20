<?php
//   session_start();

  require 'database.php';

  $conexion =mysqli_connect("localhost","root","","didisee");
//   $conexion =mysqli_connect("localhost","id17673459_root","POPOlolo22POPOlolo22@","id17673459_didisee");
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Responsive</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#" class="enlace">
            <img src="img/logo2.png" alt="" class="logo2">
        </a>
        <ul>
        <li><a class="active" href="#">Inicio</a></li>
            <li><a href="listaAlu.php">Alumnos</a></li>
            <li><a href="#">Empresa</a></li>
            <li><a href="encuesta.php">Encuesta</a></li>
            <li><a c href="#">Reportes</a></li>
            <li><a class="nav-link" href="logout.php"><?= $user['email']; ?></a></li>
        </ul>
    </nav>
</body>
</html>