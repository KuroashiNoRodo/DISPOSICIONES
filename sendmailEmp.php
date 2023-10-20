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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="partials/estilos.css"> -->
    <link rel="stylesheet" href="partials/table.css"/>
    <link rel="stylesheet" href="partials/alumnosEdit.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo-removebg-preview (1).ico"/>
    <title>DIDISEE</title>
</head>
<body>
<?php require 'header3.php' ?>
    
<div class="container" style="margin-top:2%">
  <form method="POST" action="mailEmp.php">
    <center></center>
    <div class="row">
      <div class="col-4">
        Empresa
        <input type="text" name="alu_nombre" placeholder="Alumno" required
        value="<?php echo $empresa->em_nombre; ?>">
      </div>
      <div class="col-4">
        Nombre
        <input type="text"  name="em_email" placeholder="Nombre" required
        value="<?php echo $empresa->em_email; ?>">
      </div>
      <div class="col-3">
      Telefono
        <input type="text" name="alu_telefono" placeholder="Telefono" required
        value="<?php echo $empresa->em_numero; ?>">
      </div>
      <div class="col-2">
      Correos enviados
        <input type="text" name="enviados" placeholder="" readonly
        value="<?php echo $empresa->enviados; ?>">
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
        >Por medio del presente Correo se le deja pasa el link para intestar la encueta a egregsados
        http://localhost/DIDISEE2/encuesta_emp.php?id_empresa=<?php echo $empresa->id_empresa; ?></textarea>
      </div>
     
    <div class="row" style="margin-top:2%">
        <input type="hidden" name="id_empresa" value="<?php echo $empresa->id_empresa; ?>">
        <input type="submit" class="btn btn-primary" value="enviar">
    </div>
  </form>
</div>
</body>
</html>