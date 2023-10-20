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
    if(!isset($_GET['id_alumno'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'database.php';
    $codigo = $_GET['id_alumno'];

    $sentencia = $conn->prepare("select * from tb_alumno where id_alumno = ?;");
    $sentencia->execute([$codigo]);
    $usuarios = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="partials/estilos.css"> -->
    <link rel="stylesheet" href="partials/table.css"/>
    <link rel="stylesheet" href="partials/alumnosEdit.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIDISEE</title>
    <link rel="icon" href="img/logo-removebg-preview (1).ico"/>
</head>
<body>
<?php require 'header3.php' ?>
    
<div class="container" style="margin-top:2%">
  <form method="POST" action="mail.php">
    <center></center>
    <div class="row">
      <div class="col-4">
        Alumno
        <input type="text" name="alu_nombre" placeholder="Alumno" required
        value="<?php echo $usuarios->alu_nombre; ?>">
      </div>
      <div class="col-4">
        Correo
        <input type="text"  name="alu_email" placeholder="Correo" required
        value="<?php echo $usuarios->alu_email; ?>">
      </div>
      <div class="col-3">
      Telefono
        <input type="text" name="alu_telefono" placeholder="Telefono" required
        value="<?php echo $usuarios->alu_telefono; ?>">
      </div>
      <div class="col-2">
      Correos enviados
        <input type="text" name="enviados" placeholder="" readonly
        value="<?php echo $usuarios->enviados; ?>">
      </div>
      <div class="col-6">
        Asunto
        <input type="text"  name="encuesta" placeholder="Asunto" required
        value="Encuesta a egresados">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        Mensaje
        <textarea type="text"  name="email"  required
        >Por medio del presente Correo se le deja pasa el link para intestar la encuesta a egresados
        http://localhost/DIDISEE2/encuesta_alu.php?id_alumno=<?php echo $usuarios->id_alumno; ?>?alu_nc=<?php echo $usuarios->alu_nc; ?></textarea>
      </div>
    <div class="row" style="margin-top:2%">
        <input type="hidden" name="id_alumno" value="<?php echo $usuarios->id_alumno; ?>">
        <input type="submit" class="btn btn-primary" value="enviar">
    </div>
  </form>
</div>
</body>
</html>