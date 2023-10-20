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
<html lang="en">
<head>
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="icon" href="img/logo-removebg-preview (1).ico"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="partials/estilos.css"> -->
    <link rel="stylesheet" href="partials/table.css"/>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <title>DIDISEE</title>

    <script>
      if (window.screen.width < 768) {
 
 var list;
 list = document.querySelectorAll(".miboton");
 for (var i = 0; i < list.length; ++i) {
     list[i].classList.add('btn-chico');
 }

 console.log('Ventana Menor que 768px');

}
else if (window.screen.width < 900) {

 var list;
 list = document.querySelectorAll(".miboton");
 for (var i = 0; i < list.length; ++i) {
     list[i].classList.add('btn-mediano');
 }

 console.log('Ventana Menor que 900px');

}
else if (window.screen.width < 1200) {

 var list;
 list = document.querySelectorAll(".miboton");
 for (var i = 0; i < list.length; ++i) {
     list[i].classList.add('btn-grande');
 }

 console.log('Ventana Menor que 1200px');
 
}
    </script>

    <style>

.btnDelete {
    text-decoration: none;
    color:white;
}
.btnSend {
    color:white;
    text-decoration: none;

}
      .miboton {
    background-color: #525251!important;
    border-radius: 5px;
    font-size: 17px;
    font-family: 'Source Sans Pro', sans-serif;
    padding: 6px 18px;
    border: inherit;
    
}
 
.miboton, .btn-chico, .btn-mediano, .btn-grande, .miboton:link, .miboton:visited {
    color: #FFFFFF;
    background-color: #D4D451;
}
 
.btn-chico {
  margin-right:0%;
    font-size: 1rem;
    display: inline-block;
    width: calc(50% - 20px);
    padding: 10px;
    margin: 10px;
    background-color: #D4D451!important;
    border-radius: 5px;    
    font-family: 'Source Sans Pro', sans-serif;
    padding: 6px 18px;
}
 
.btn-mediano {
    font-size: 1rem;
    
    display: inline-block;
    width: calc(50% - 20px);
    padding: 10px;
    margin: 10px;
    background-color: #D4D451!important;
    border-radius: 5px;    
    font-family: 'Source Sans Pro', sans-serif;
    padding: 6px 18px;
} 
 
.btn-grande {
    
    font-size: 1rem;
    display: inline-block;
    width: calc(50% - 20px);
    padding: 10px;
    margin: 10px;
    background-color: #D4D451!important;
    border-radius: 10px;    
    font-family: 'Source Sans Pro', sans-serif;
    padding: 6px 18px;
}
    </style>

</head>
<body>

<?php require 'header3.php' ?>

<?php 
  
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'creado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Correcto </strong>Periodo Creado
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Correcto </strong>Periodo editado
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/DIDISEE2/listaPeri.php">
            <?php 
                }
            ?>   

<button  style="margin:20px; margin-right:-140%; " class="miboton">
<a href="altaPeri.php" style="text-decoration: none;color: white;" >Agregar</a>
</button>
<!-- <button type="button" class="btn btn-success float-right"style="margin:20px; margin-left:224%;" >
<a href="excelAlu.php" style="text-decoration: none;color: white;" class="bi bi-file-earmark-excel-fill" ></a>
</button> -->


<div class="rwd">
<center>
        <caption>
        <h1>Lista de Periodos</h1>  
        </caption>
      </center>
      <table class="table caption-top">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Generacion</th>
          <th>Fecha inicio</th>
          <th>Fecha fin</th>
          <th>status</th>
          <th style="text-aling:center">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
    include_once "database.php";
    $sentencia = $conn -> query("select * from tb_aplicacion   ORDER BY id_aplicacion ASC");
    $aplicacion = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>
 <?php 
                                foreach($aplicacion as $dato){ 
                            ?>
          <td><?php echo $dato->id_aplicacion; ?></td>
          <td><?php echo $dato->apli_generacion; ?></td>
          <td><?php echo $dato->apli_fecha_ini; ?></td>
          <td><?php echo $dato->apli_fecha_fin; ?></td>
          <td><?php echo $dato->status; ?></td>
          <td>
            <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar alumno" ><a class="btnSend bi bi-pencil" href="editarPeri.php?id_aplicacion=<?php echo $dato->id_aplicacion; ?>"></a></button>
            <button type="button" class="btn btn-danger btn-sm" ><a class="btnDelete bi bi-hourglass-bottom" onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminarAlu.php?id_aplicacion=<?php echo $dato->id_aplicacion; ?>"></a></button> 
          </td>                      
        </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>





</body>
</html>