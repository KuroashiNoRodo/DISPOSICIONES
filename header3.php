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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
  <nav class="navbar navbar bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a href="index.php">
    <img src="partials/logo2.png" alt="Bootstrap" width="90" height="30">
    </a>
     <?php if(!empty($user)): ?>
      <div
      style="color:white;
      text-transform: uppercase;
      position:absolute;
      top:-30%;
      left:90%;">
      <br>  <?= $user['email']; ?>
      </div>
    <?php endif; ?>
    <link rel="icon" href="img/logo-removebg-preview (1).ico"/>
      
    
    <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="bi bi-list"></span>
    </button>
    <div  class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="listaAlu.php">Alumnos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listaEmp.php">Empresas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listaPeri.php">Periodo</a>
        </li>
        <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Encuestas
              </a>
          <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="encuesta.php">Alumnos</a></li>
                <li><a class="dropdown-item" href="#">Empresas</a></li>

              </ul>
        </li> -->
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Reportes
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="egresadosReporte.php">Reporte 1</a></li>
              </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Crear nuevo usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" >Cerrar sesion </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>