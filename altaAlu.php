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
             <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'fecha'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> La fecha de ingreso no puede ser mayor a la fecha de egreso
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            

    <div class="container" style="margin-top:2%">
  <form  method="POST" action="CreateAlu.php">
    <div class="row">
    <div class="col-12">
        <center>
        <h2>Datos del Alumno</h2>
        </center>
      </div>
      <hr>
      <div class="col-2">
        Numero de control
        <input type="text" class="form-control" name="alu_nc" placeholder="Numero de control" required>
      </div>
      <div class="col-4">
        Nombre
        <input type="text"  name="alu_nombre" placeholder="Nombre" required>
      </div>
      <div class="col-2">
        Sexo
        <select class="form-select" aria-label="Default select example" name="alu_seso">
  <option value="Masculino">Masculino</option>
  <option value="Femenino">Femenino</option>
</select>
      </div>
      <div class="col-4">
        Domicilio
        <input type="text"  name="alu_domicilio" placeholder="Domicilio" required>
      </div>
    </div>
    <div class="row">
      
      <div class="col-2">
        Telefono
        <input type="text"  name="alu_telefono" placeholder="Telefono" required>
      </div>
      <div class="col-4">
      <select class="form-select"  style="margin-top: 30px;" name="fk_alu_carrera" id="">
      <option value="">Carreras</option>
        
      <?php 
                while($carrerasReg=$rescarreras->fetch_array(MYSQLI_BOTH)){
                  echo ' <option value="'.$carrerasReg['id'].'"> '.$carrerasReg['acronimo'].'</option>';
                }
            ?>   

      </select>
  </div>
      <div class="col-3">
        Fecha de ingreso
        <input type="date"  name="alu_ingreso" placeholder="Fecha de ingreso" required>
      </div>
      <div class="col-3">
        Fecha de egreso
        <input type="date"  name="alu_egreso" placeholder="Fecha de egreso" required>
      </div>
    </div>
    <div class="row">
      
      <div class="col-2">
        Titulado
        <select class="form-select" aria-label="Default select example" name="alu_titulado">
          <option value="si">si</option>
          <option value="no">no</option>
        </select>
      </div>
      <!-- <div class="col-2">
        Estado
        <select class="form-select" aria-label="Default select example" name="alu_estado">
          <option value="activo">activo</option>
          <option value="inactivo">inactivo</option>
        </select>
      </div> -->
      <div class="col-4">
        Email
        <input type="text"  name="alu_email" placeholder="Email" required>
      </div>
      <!-- <div class="col-4">
        Semestre
        <input type="text"  name="alu_semestre" placeholder="Semestre" required>
      </div> -->
      <div class="col-sm-3">
      Aplicacion
                            <select class="form-select"name="fk_id_aplicacion">
                                <?php 
                                    foreach ($aplicaciones as $dato) {
                                ?> 
                                    <option value="<?php echo $dato->id_aplicacion; ?>" <?php echo (isset($valorSeleccionado) && $valorSeleccionado == $dato->id_aplicacion) || (isset($_GET['codigo']) && $_GET['codigo'] == $dato->id_aplicacion) ? "selected" : "" ?>><?php  echo $dato->apli_generacion; ?></option>
                                <?php 
                                    }
                                ?> 
                            </select>
                        </div>
      <div class="row" style="margin-top:2%">
        <input type="hidden"name="oculto" value="1">
        <input type="submit" class="btn btn-primary" value="Agregar">
      </div>
      
 
  </form>
</div>       
                     

                

    </body>
</html>