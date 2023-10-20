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

    $sentencia2 = $conn -> query("select * from tb_aplicacion where status = 'activo'");
    $aplicaciones = $sentencia2->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
    $sentencia3 = $conn -> query("select * from tb_carrera");
    $carreras2 = $sentencia3 -> fetchAll(PDO::FETCH_OBJ);

    $host="localhost";
    $usuario="root";
    $contraseña="";
    $base="didisee";
    $conexion = new mysqli($host,$usuario,$contraseña,$base);
    if($conexion->connect_errno){
      
    }
    $sentencia = $conn -> query("select * from tb_aplicacion where status = 'activo'");
      $aplicaciones = $sentencia->fetchAll(PDO::FETCH_OBJ);
  
      $carreras="SELECT * FROM tb_carrera";
    $rescarreras=$conexion->query($carreras);
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
  <form method="POST" action="updateAlu.php">
    <div class="row">
    <div class="col-12">
        <center>
        <h2>Editar Alumno</h2>
        </center>
      </div>
      <hr>
      <div class="col-2">
        Numero de control
        <input type="text" name="alu_nc" placeholder="Numero de control" required
        value="<?php echo $usuarios->alu_nc; ?>">
      </div>
      <div class="col-4">
        Nombre
        <input type="text"  name="alu_nombre" placeholder="Nombre" required
        value="<?php echo $usuarios->alu_nombre; ?>">
      </div>
      <div class="col-2">
        Sexo
        <select class="form-select" aria-label="Default select example" name="alu_seso">
        <option readonly> <?php echo $usuarios->alu_seso; ?></option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        </select>
      </div>
      <div class="col-4">
        Domicilio
        <input type="text"  name="alu_domicilio" placeholder="Domicilio" required 
        value="<?php echo $usuarios->alu_domicilio; ?>">
      </div>
    </div>
    <div class="row">
      
      <div class="col-2">
        Telefono
        <input type="text"  name="alu_telefono" placeholder="Telefono" required
        value="<?php echo $usuarios->alu_telefono; ?>">
      </div>
      <div class="col-4">
        Carrera
      <select class="form-select"  style="margin-top: 10px;" name="fk_alu_carrera" id="">
      <!-- <option value="">Carreras</option> -->
      <option value="fk_alu_carrera" disabled> <?php echo $usuarios->fk_alu_carrera; ?></option>
        
      <!-- <?php 
                while($carrerasReg=$rescarreras->fetch_array(MYSQLI_B<OTH)){
                  echo ' <option value="'.$carrerasReg['id'].'"> '.$carrerasReg['acronimo'].'</option>';
                }
            ?>    -->
            <?php 
                                    foreach ($carreras2 as $dato) {
                                ?> 
                                <option value="<?php echo $dato->id; ?>" <?php echo (isset($valorSeleccionado) && $valorSeleccionado == $dato->id) || (isset($_GET['codigo']) && $_GET['codigo'] == $dato->id) ? "selected" : "" ?>><?php  echo $dato->acronimo; ?></option>
                                <?php 
                                    }
                                ?> 

      </select>
  </div>
      <div class="col-3">
        Fecha de ingreso
        <input type="date"  name="alu_ingreso" placeholder="Fecha de ingreso" required
        value="<?php echo $usuarios->alu_ingreso; ?>">
      </div>
      <div class="col-3">
        Fecha de egreso
        <input type="date"  name="alu_egreso" placeholder="Fecha de egreso" required
        value="<?php echo $usuarios->alu_egreso; ?>">
      </div>
      <div class="col-2">
        Titulado
        <select class="form-select" aria-label="Default select example" name="alu_titulado">
        <option disabled> <?php echo $usuarios->alu_titulado; ?></option>
  <option value="si">si</option>
  <option value="no">no</option>
  </select>
       
      </div>
      <!-- <div class="col-2">
        Estado
        <select class="form-select" aria-label="Default select example" name="alu_estado">
        <option disabled> <?php echo $usuarios->alu_estado; ?></option>
  <option value="activo">activo</option>
  <option value="inactivo">inactivo</option>
</select>
        
      </div> -->
      <div class="col-4">
        Email
        <input type="text"  name="alu_email" placeholder="Email" required
        value="<?php echo $usuarios->alu_email; ?>">
      </div>
      <!-- <div class="col-4">
        Semestre
        <input type="text"  name="alu_semestre" placeholder="Semestre" required
        value="<?php echo $usuarios->alu_semestre; ?>">
      </div> -->
      <div class="col-sm-3">
      Aplicacion
                            <select class="form-select"name="fk_id_aplicacion">
                            <option disabled> <?php echo $usuarios->fk_id_aplicacion; ?></option>
                                <?php 
                                    foreach ($aplicaciones as $dato) {
                                ?> 
                               
                                    <option value="<?php echo $dato->id_aplicacion; ?>" <?php echo (isset($valorSeleccionado) && $valorSeleccionado == $dato->id_aplicacion) || (isset($_GET['codigo']) && $_GET['codigo'] == $dato->id_aplicacion) ? "selected" : "" ?>><?php  echo $dato->apli_generacion; ?></option>
                                <?php 
                                    }
                                ?> 
                            </select>
                        </div>
    </div>
    <div class="row" style="margin-top:2%">
        <input type="hidden" name="id_alumno" value="<?php echo $usuarios->id_alumno; ?>">
        <input type="submit" class="btn btn-primary" value="Editar">
    </div>
  </form>
</div>
</body>
</html>