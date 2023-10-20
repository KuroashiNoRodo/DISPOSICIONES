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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="partials/estilos.css"> -->
    <link rel="stylesheet" href="partials/table.css"/>
    <link rel="icon" href="img/logo-removebg-preview (1).ico"/>
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

<button  style="margin:20px; margin-right:-140%; " class="miboton">
<a href="altaEmp.php" style="text-decoration: none;color: white;" >Agregar</a>
</button>
<button type="button" class="btn btn-success float-right"style="margin:20px; margin-left:224%;" >
<a href="excelEmp.php" style="text-decoration: none;color: white;" class="bi bi-file-earmark-excel-fill" ></a>
</button>

<div class="rwd">
      <center>
        <caption>
        <h1>Lista de Empresas</h1>  
        </caption>
      </center>
      <table class="table caption-top">
      <thead class="table-dark">
        <tr>
          <th>Nombre</th>
          <th>Telefono</th>
          <th>Encuesta</th>
          <th>Correos</th>
          <th>status</th>
          <th style="text-aling:center">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
    include_once "database.php";
    $sentencia = $conn -> query("select * from tb_empresa ");
    $empresa = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>
 <?php 
                                foreach($empresa as $dato){ 
                            ?>
          <td><?php echo $dato->em_nombre; ?></td>
          <td><?php echo $dato->em_numero; ?></td>
          <td><?php echo $dato->encuesta; ?></td>
          <td><?php echo $dato->enviados; ?></td>
          <td><?php echo $dato->em_status; ?></td>
          <td>
            <button type="button" class="btn btn-warning btn-sm" ><a class="btnSend bi bi-pencil" href="editarEmpresa.php?id_empresa=<?php echo $dato->id_empresa; ?>"></a></button>
            <button type="button" class="btn btn-info btn-sm" ><a  class="btnSend  bi bi-envelope-at" href="sendmailEmp.php?id_empresa=<?php echo $dato->id_empresa; ?>"></a></button>
            <button type="button" class="btn btn-danger btn-sm" ><a class="btnDelete bi bi-trash3-fill" onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminarEmp.php?id_empresa=<?php echo $dato->id_empresa; ?>"></a></button> 
          </td>                      
        </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>

</body>
</html>