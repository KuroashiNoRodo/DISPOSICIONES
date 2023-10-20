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
<?php
    if(!isset($_GET['id_empresa'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'database.php';
    $codigo = $_GET['id_empresa'];

    $sentencia = $conn->prepare("select * from tb_empresa where id_empresa = ?;");
    $sentencia->execute([$codigo]);
    $empresa = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DIDISEE</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <!-- <link rel="stylesheet" href="partials/estilos.css"> -->
    <link rel="stylesheet" href="partials/table.css"/>
    <link rel="stylesheet" href="partials/alumnosEdit.css"/>
    <link rel="icon" href="img/logo-removebg-preview (1).ico"/>
    </head>
    <body>
    <?php require 'header3.php' ?>

    <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'repetido'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Ya existe un alumno con el mismo numero de control.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   

    <div class="container" style="margin-top:2%">
  <form  method="POST" action="updateEmp.php">
    <div class="row">
    <div class="col-12">
        <center>
        <h2>Editar empresa</h2>
        </center>
      </div>
      <hr>
      <div class="col-5">
        Nombre
        <input type="text" class="form-control" name="em_nombre" placeholder="Nombre" required
        value="<?php echo $empresa->em_nombre; ?>">
      </div>
      <div class="col-4">
        Domicilio
        <input type="text"  name="em_domicilio" placeholder="Docicilio" required
        value="<?php echo $empresa->em_domicilio; ?>">
      </div>
      <div class="col-3">
        Municipio
        <input type="text"  name="em_municipio" placeholder="Municipio" required
        value="<?php echo $empresa->em_municipio; ?>">
      </div>
      <div class="col-3">
        Ciudad
        <input type="text"  name="em_ciudad" placeholder="Ciudad" required
        value="<?php echo $empresa->em_ciudad; ?>">
      </div>
      <div class="col-2">
        Estado
        <input type="text"  name="em_estado" placeholder="Estado" required
        value="<?php echo $empresa->em_estado; ?>">
      </div>
      <div class="col-2">
        Telefono
        <input type="text"  name="em_numero" placeholder="Telefono" required
        value="<?php echo $empresa->em_numero; ?>">
      </div>
      <div class="col-2">
        Estatus
        <select class="form-select" aria-label="Default select example" name="em_status">
        <option disabled> <?php echo $empresa->em_status; ?></option>
  <option value="activo">activo</option>
  <option value="inactivo">inactivo</option>
</select>
      </div>
      <div class="col-3">
        Fecha de registro
        <input type="date"  name="em_fecha_registro" placeholder="Fecha de ingreso" required
        value="<?php echo $empresa->em_fecha_registro; ?>">
      </div>
    </div>
      <div class="col-4">
        Email
        <input type="text"  name="em_email" placeholder="Email" required
        value="<?php echo $empresa->em_email; ?>">
      </div>
      <div class="row" style="margin-top:2%">
      <input type="hidden" name="id_empresa" value="<?php echo $empresa->id_empresa; ?>">
        <input type="submit" class="btn btn-primary" value="Editar">
   
    </div>
 
  </form>
</div>       
                       
    </body>
</html>