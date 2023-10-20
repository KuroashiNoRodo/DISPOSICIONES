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
    if(!isset($_GET['id_aplicacion'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'database.php';
    $codigo = $_GET['id_aplicacion'];

    $sentencia = $conn->prepare("select * from tb_aplicacion where id_aplicacion = ?;");
    $sentencia->execute([$codigo]);
    $aplicacion = $sentencia->fetch(PDO::FETCH_OBJ);
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
  <form  method="POST" action="updatePeri.php">
    <div class="row">
    <div class="col-12">
        <center>
        <h2>Editar Periodo</h2>
        </center>
      </div>
      <hr>
      <div class="col-3">
        Generacion a quien se aplicara
        <input type="text" class="form-control" name="apli_generacion" placeholder="Generacion" required
        value="<?php echo $aplicacion->apli_generacion; ?>">
      </div>
      <div class="col-9">
       
       </div>
       <div class="col-3">
        Fecha de fin
        <input type="date"  name="apli_fecha_ini" placeholder="Fecha de fin"
        value="<?php echo $aplicacion->apli_fecha_ini; ?>" required>
        </div>
        <div class="col-3">
        Fecha de fin
        <input type="date"  name="apli_fecha_fin" placeholder="Fecha de fin"
        value="<?php echo $aplicacion->apli_fecha_fin; ?>" required>
        </div>
      <div class="col-2">
        Estatus
        <select class="form-select" aria-label="Default select example" name="status">
        <option disabled> <?php echo $aplicacion->status; ?></option>
  <option value="activo">activo</option>
  <option value="inactivo">inactivo</option>
</select>
</div>
</div>
     
     
      <div class="row" style="margin-top:2%">
      <input type="hidden" name="id_aplicacion" value="<?php echo $aplicacion->id_aplicacion; ?>">
        <input type="submit" class="btn btn-primary" value="Editar">
   
    </div>
 
  </form>
</div>       
                       
    </body>
</html>