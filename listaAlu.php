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
  $nombre;
  $carrera;
  $limit;
  $where = "";

    $nombre =isset( $_POST["alu_nombre"])?$_POST["alu_nombre"]:"";
    $carrera =isset( $_POST["fk_alu_carrera"])?$_POST["fk_alu_carrera"]:"";
    $limit =isset( $_POST["registros"])?$_POST["registros"]:"";
    // $carrera = $_POST["alu_carrera"];
    // $limit = $_POST["registros"];
    
   


  
  // $resAlu=$conexion->query('SELECT * FROM tb_alumno $where $limit ');
 


  if(isset($_POST['buscar'])){
    if(empty($_POST['fk_alu_carrera'])){
      $where="where alu_nombre like'".$nombre."%'";
    }else if(empty($_POST['alu_nombre'])){
      $where = "where fk_alu_carrera = '".$carrera."'";
    }else{
      $where = "where alu_nombre like'".$nombre."%' and fk_alu_carrera = '".$carrera."' ";
    }
  }

  $alumnos="SELECT tba.*, tb_aplicacion.apli_generacion, tb_carrera.acronimo
  FROM tb_alumno as tba JOIN tb_aplicacion ON tb_aplicacion.id_aplicacion = tba.fk_id_aplicacion JOIN tb_carrera ON tb_carrera.id = tba.fk_alu_carrera $where $limit";
  $resAlumnos=$conexion->query($alumnos);

  $carreras="SELECT * FROM tb_carrera";
  $rescarreras=$conexion->query($carreras);
  // $sentencia = $conn -> query("select * from tb_alumno $where $limit");
  // $alumno = $sentencia->fetchAll(PDO::FETCH_OBJ);
  // echo $alumno["id"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="partials/estilos.css"> -->
    <link rel="stylesheet" href="partials/table.css"/>
    <link rel="icon" href="img/logo-removebg-preview (1).ico"/>
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
            <strong>Correcto </strong>Alumno creado
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/DIDISEE2/listaAlu.php">
            <?php 
                }
            ?>   
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Correcto </strong>Alumno editado
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/DIDISEE2/listaAlu.php">
            <?php 
                }
            ?>   

<button  style="margin:20px; margin-right:-140%; " class="miboton">
<a href="altaAlu.php" style="text-decoration: none;color: white;" >Agregar</a>
</button>
<button type="button" class="btn btn-success float-right"style="margin:20px; margin-left:224%;" >
<a href="excelAlu.php" style="text-decoration: none;color: white;" class="bi bi-file-earmark-excel-fill" ></a>
</button>
<center>
        <caption>
        <h1>Lista de alumnos</h1>  
        </caption>
      </center>

<form method="POST" action="">

<div class="row">
  
  <div class="col-2">
      <input type="text" name="alu_nombre" placeholder="Nombre">
  </div>
  <div class="col-1">
     
  </div>
  <div class="col-2">
      <select class="form-select"  style="margin-top: 30px;" name="fk_alu_carrera" id="">
      <option value="">Carreras</option>
        
      <?php 
                while($carrerasReg=$rescarreras->fetch_array(MYSQLI_BOTH)){
                  echo ' <option value="'.$carrerasReg['id'].'"> '.$carrerasReg['acronimo'].'</option>';
                }
            ?>   

      </select>
  </div>
  <div class="col-2" >
      <select class="form-select" style="margin-top: 30px;" name="registros" id="">
      <option value="">LImites</option>
        <option value="limit 3">3</option>
        <option value="limit 6">6</option>
        <option value="limit 9">9</option>

      </select>
  </div>
  <div class="col-2" >
    

  <button  class="btn btn-primary" style="margin-top: 30px;" name="buscar" type="submit">
  <i class="bi bi-search"></i>
  </button>
  </div>
      </div>
      

</form>

<div class="rwd">
     
      
      <table class="table caption-top">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Carrera</th>
          <th>Periodo</th>
          <th>Encuesta</th>
          <th>Correos</th>
          <!-- <th>status</th> -->
          <th style="text-aling:center">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php 
        
        while($registroAlu=$resAlumnos ->fetch_array(MYSQLI_BOTH))
        { 

                echo '<tr>
                <td>'.$registroAlu['alu_nc'].'</td>
                <td>'.$registroAlu['alu_nombre'].'</td>
                <td>'.$registroAlu['acronimo'].'</td>
                <td>'.$registroAlu['apli_generacion'].'</td>
                <td>'.$registroAlu['encuesta'].'</td>
                <td>'.$registroAlu['enviados'].'</td>
                <td>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar alumno" ><a class="btnSend bi bi-pencil" href="editarAlumno.php?id_alumno='.$registroAlu['id_alumno'].'"></a></button>
                <button type="button" class="btn btn-info btn-sm" ><a  class="btnSend bi bi-envelope-at" href="sendmail.php?id_alumno='.$registroAlu['id_alumno'].'"</a></button>
                </td>
                </tr>';
        }
        ?>

        <!-- <?php
    include_once "database.php";
    // $sentencia = $conn -> query("select * from tb_alumno $where $limit");
    // // $nombrealu $sentencia->query($alumno);
    // $alumno = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
    //print_r($persona);
?>
 <?php 
                                foreach($alumnos as $dato){ 
                            ?>
          <td><?php echo $dato->alu_nc; ?></td>
          <td><?php echo $dato->alu_nombre; ?></td>
          <td><?php echo $dato->fk_id_aplicacion; ?></td>
          <td><?php echo $dato->encuesta; ?></td>
          <td><?php echo $dato->enviados; ?></td>
          <!-- <td><?php echo $dato->alu_estado; ?></td> -->
          <td>
            <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar alumno" ><a class="btnSend bi bi-pencil" href="editarAlumno.php?id_alumno=<?php echo $dato->id_alumno; ?>"></a></button>
            <button type="button" class="btn btn-info btn-sm" ><a  class="btnSend bi bi-envelope-at" href="sendmail.php?id_alumno=<?php echo $dato->id_alumno; ?>"></a></button>
            <button type="button" class="btn btn-danger btn-sm" ><a class="btnDelete bi bi-trash3" onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminarAlu.php?id_alumno=<?php echo $dato->id_alumno; ?>"></a></button> 
          </td>                      
        </tr>
        <?php } ?> -->
        </tbody>
      </table>
    </div>





</body>
</html>