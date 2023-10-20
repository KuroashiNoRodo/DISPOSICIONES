<?php
  session_start();

  require 'database.php';
  $ususecion=$_SESSION['user_id'];
  if($ususecion==null || $ususecion==''){
    header('Location: login.php');
    die();
  }

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
<html>
  <head>
    <meta charset="utf-8">
    <title>DIDISEE</title>
    <!-- <link rel="icon" href="partials/logo3.png" style="width:1px" > -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="icon" href="img/logo-removebg-preview (1).ico"/>
  </head>
  <body>
    
    <?php require 'header3.php' ?>
    <?php 
  
  
  if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'creado'){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Correcto </strong>Nuevo usuario creado
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/DIDISEE2/listaAlu.php">
<?php 
  }
?>   
  
<center>
<div style="width:30%;" >
  <canvas id="grafico"></canvas>
</div>
</center>
  
   

    <!-- <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged Inssss
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="login.php">Login</a> or
      <a href="signup.php">SignUp</a>
    <?php endif; ?> -->
    
  </body>
  <script>
    
     fetch('datos.php')
      .then(response => response.json())
      .then(data => {
        // Crear un array con las etiquetas y los valores
        // const etiquetas = data.map(item => item.encuesta);
        const valores = data.map(item => item.cantidad);
        const valores2 = data.map(item => item.cantidad2);
        console.log("===================");
        console.log(valores2);
        console.log("====================");
        // Crear el gráfico con Chart.js
        const ctx = document.getElementById('grafico').getContext('2d');
        const chart = new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ["Encuestados","No encuestados"],
            datasets: [{
              label: 'Alumnos',
              data: [valores,valores2],
              backgroundColor:[ 'rgba(54, 162, 235, 0.2)','rgba(255, 0, 0, 0.2)'],
              borderColor: 'rgba(54, 162, 235, 1)',
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: false
                }
              }]
            }
          }
        });
      });

      
  </script>

 
 
</html>
