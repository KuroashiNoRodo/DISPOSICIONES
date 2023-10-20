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


  $periodo;
  $where = "";

    $periodo =isset( $_POST["fk_id_aplicacion"])?$_POST["fk_id_aplicacion"]:"";

    if(isset($_POST['buscar'])){
      if(!empty($_POST['fk_id_aplicacion'])){
        $where = "where fk_id_aplicacion =$periodo";
        $alumnos="SELECT  (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 3 AND p7= 4 AND alu_seso ='Femenino' )as GTAF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 3 AND p7= 4 AND alu_seso ='Masculino' )as GTAM,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 3 AND p21= 4  )as ARQpublico,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 3 AND p21= 3  )as ARQprivado,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 3 AND p21= 2  )as ARQsocial,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 3 AND p8 != NULL AND alu_seso ='Femenino' )as ARQEF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 3 AND p8 != NULL AND alu_seso ='Masculino' )as ARQEM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 3 )as arquiF,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 3 )as arquiM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 3 AND encuesta <= 1)as arqui1F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 3 AND encuesta <= 1 )as arqui1M,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 3 AND encuesta > 2)as arqui2F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 3 AND encuesta > 2 )as arqui2M,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 2 )as IIAF,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 2 )as IIAM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 2 AND encuesta <= 1)as IIA1F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 2 AND encuesta <= 1 )as IIA1M,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 2 AND encuesta >= 2)as IIA2F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 2 AND encuesta >= 2 )as IIA2M,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 2 AND p7= 4 AND alu_seso ='Femenino' )as GTIIAF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 2 AND p7= 4 AND alu_seso ='Masculino' )as GTIIAM,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 2 AND p21= 4  )as IIApublico,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 2 AND p21= 3  )as IIAprivado,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 2 AND p21= 2  )as IIAsocial,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 2 AND p8 != NULL AND alu_seso ='Femenino' )as IIAEF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 2 AND p8 != NULL AND alu_seso ='Masculino' )as IIAEM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 1 )as ISCF,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 1 )as ISCM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 1 AND encuesta <= 1)as ISC1F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 1 AND encuesta <= 1 )as ISC1M,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 1 AND encuesta >= 2)as ISC2F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 1 AND encuesta >= 2 )as ISC2M,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 1 AND p7= 4 AND alu_seso ='Femenino' )as GTISCF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 1 AND p7= 4 AND alu_seso ='Masculino' )as GTISCM,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 1 AND p21= 4  )as ISCpublico,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 1 AND p21= 3  )as ISCprivado,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 1 AND p21= 2  )as ISCsocial,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 1 AND p8 != NULL AND alu_seso ='Femenino' )as ISCEF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 1 AND p8 != NULL AND alu_seso ='Masculino' )as ISCEM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 4 )as LAF,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 4 )as LAM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 4 AND encuesta <= 1)as LA1F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 4 AND encuesta <= 1 )as LA1M,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 4 AND encuesta >= 2)as LA2F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 4 AND encuesta >= 2 )as LA2M,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 4 AND p7= 4 AND alu_seso ='Femenino' )as GTLAF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 4 AND p7= 4 AND alu_seso ='Masculino' )as GTLAM,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 4 AND p21= 4  )as LApublico,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 4 AND p21= 3  )as LAprivado,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 4 AND p21= 2  )as LAsocial,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 4 AND p8 != NULL AND alu_seso ='Femenino' )as LAEF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 4 AND p8 != NULL AND alu_seso ='Masculino' )as LAEM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 5 )as IGEF,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 5 )as IGEM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 5 AND encuesta <= 1)as IGE1F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 5 AND encuesta <= 1 )as IGE1M,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 5 AND encuesta >= 2)as IGE2F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 5 AND encuesta >= 2 )as IGE2M,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 5 AND p7= 4 AND alu_seso ='Femenino' )as GTIGEF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 5 AND p7= 4 AND alu_seso ='Masculino' )as GTIGEM,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 5 AND p21= 4  )as IGEpublico,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 5 AND p21= 3  )as IGEprivado,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 5 AND p21= 2  )as IGEsocial,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 5 AND p8 != NULL AND alu_seso ='Femenino' )as IGEEF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 5 AND p8 != NULL AND alu_seso ='Masculino' )as IGEEM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 6 )as IAF,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 6 )as IAM,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 6 AND encuesta <= 1)as IA1F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 6 AND encuesta <= 1 )as IA1M,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Femenino' AND fk_alu_carrera = 6 AND encuesta >= 2)as IA2F,
                          (select COUNT(id_alumno) from tb_alumno $where AND alu_seso='Masculino' AND fk_alu_carrera = 6 AND encuesta >= 2 )as IA2M,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 6 AND p7= 4 AND alu_seso ='Femenino' )as GTIAF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 6 AND p7= 4 AND alu_seso ='Masculino' )as GTIAM,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 6 AND p21= 4  )as IApublico,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 6 AND p21= 3  )as IAprivado,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 6 AND p21= 2  )as IAsocial,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 6 AND p8 != NULL AND alu_seso ='Femenino' )as IAEF,
                          (select COUNT(tb_alumno.id_alumno) from  tb_alumno inner join tb_en_alu ON tb_en_alu.id_alumno = tb_alumno.id_alumno $where  AND fk_alu_carrera = 6 AND p8 != NULL AND alu_seso ='Masculino' )as IAEM
                           FROM tb_alumno  limit 1" ;
        $resAlumnos=$conexion->query($alumnos);
                
        // var_dump($resAlumnos ->fetch_array(MYSQLI_BOTH));
        // die();
      }
    }else{
      // $alumnos="SELECT  (select COUNT(id_alumno) from tb_alumno where fk_id_aplicacion > 0 AND alu_seso='Femenino' AND fk_alu_carrera = 3 )as arquiF,(select COUNT(id_alumno) from tb_alumno where fk_id_aplicacion > 0 and alu_seso='Masculino' AND fk_alu_carrera = 2 )as arquiM FROM tb_alumno limit 1" ;
      //  $resAlumnos=$conexion->query('');
      // var_dump($resAlumnos);
      //   die();
  }
   


  $carreras="SELECT * FROM tb_aplicacion";
  $rescarreras=$conexion->query($carreras);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DIDISEE</title>
    <!-- <link rel="icon" href="partials/logo3.png" style="width:1px" > -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="img/logo-removebg-preview (1).ico"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
    
    <?php require 'header3.php' ?>

    <button type="button" class="btn btn-success float-right"style="margin:20px;" >
<a href="excel1.php" style="text-decoration: none;color: white;" class="bi bi-file-earmark-excel-fill" ></a>
</button>

<form method="POST" action="">
<div class="row">
<div class="col-2"></div>
<div class="col-2" style="margin-top:-4%">
      <select class="form-select"  name="fk_id_aplicacion">
      <option value="">Periodo</option>
        
       <?php 
                while($carrerasReg=$rescarreras->fetch_array(MYSQLI_B<OTH)){
                  echo ' <option value="'.$carrerasReg['id_aplicacion'].'"> '.$carrerasReg['apli_generacion'].'</option>';
                }
            ?> 

      </select>
      
  </div>
  <div class="col-2" style="margin-top:-6.2%" >
  <button  class="btn btn-primary" style="margin-top: 30px;" name="buscar" type="submit">
  <i class="bi bi-search"></i>
  </button>
  </div>
</div>
</form>

<div class="table-responsive">
    <table class="table table-striped">
    <center>
        <thead>
                <tr>
                    <th colspan="18">
                    <center>
                    UNIDAD ACADEMICA LA HUERTA
                    </center>    
                    </th>
                </tr>
        </thead>
    </center>
  <thead>
    <tr>
        
      <th scope="col"></th>
      <th scope="col" colspan="2">
        <center>
        SERV. ESCOLARES
        </center>
        </th>
      <th scope="col" colspan="4">
      <center>
      AREA ACADEMICA
      </center>  
      </th>
      <th scope="col" colspan="2">
      <center>
      N/A
      </center>  
      </th>
      <th scope="col" colspan="7">
      <center>
      AREA ACADEMICA
      </center>  
      </th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <tr></tr>
      <th scope="row"></th>
      <td colspan="2">(Servicio Escolares) Total de egresados de Licenciatura al cierre de   junio de 2021</td>
      <td colspan="2">No. de estudiantes a quienes se les aplicó Estudio de seguimiento a 3 meses de su egreso.</td>
      <td colspan="2">No. de estudiantes a quienes se les aplicó Estudio de seguimiento a 6 meses de su egreso</td>
      <td colspan="2">Total de Egresados de Posgrado en el año</td>
      <td>No. Total de egresados en el año N/ total en seguimiento *100%</td>
      <td colspan="2">Número de egresados incorporados al mercado laboral en los primeros doce meses de su egreso</td>
      <td colspan="3" >Mapeo de inserción laboral de egresados,% de ubicación por sector </td>
      <td>No. de estudios realizados para conocer la percepción de empleadores</td>
      <td>Periodo de realización: semestral/anual</td>
    </tr>
    <tr>
    <th scope="row"></th>
      <th>Hombre</th>
      <th>Mujer</th>
      <th>Hombre</th>
      <th>Mujer</th>
      <th>Hombre</th>
      <th>Mujer</th>
      <th>Hombre</th>
      <th>Mujer</th>
      <th colspan=""></th>
      <th >Hombre</th>
      <th>Mujer</th>
      <th>Publico</th>
      <th>Privado</th>
      <th>Social</th>
      <th></th>
      <th></th>
    </tr>
    <tr>
    
    <?php  
    if(isset($resAlumnos)){
     while($datoArq = $resAlumnos ->fetch_array(MYSQLI_BOTH)){ 
      ?>    
    <th scope="row">ARQUITECTURA</th>
      <th scope="row"><?php echo $datoArq["arquiM"];?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["arquiF"]; ?></th>
      <th scope="row"><?php echo $datoArq["arqui1M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["arqui1F"]; ?></th>
      <th scope="row"><?php echo $datoArq["arqui2M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["arqui2F"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ARQEM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ARQEF"]; ?></th>
      <th scope="row"><?php echo $datoArq["arquiM"]+$datoArq["arquiF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTAM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTAF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ARQpublico"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ARQprivado"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ARQsocial"]; ?></th>
      <td>@mdo</td>
      <td>@twitter</td>
    </tr>
    <tr>
    

    <th scope="row">INGENIERÍA EN INDUSTRIAS ALIMENTARIAS</th>
    <th scope="row"><?php echo $datoArq["IIAM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IIAF"]; ?></th>
      <th scope="row"><?php echo $datoArq["IIA1M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IIA1F"]; ?></th>
      <th scope="row"><?php echo $datoArq["IIA2M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IIA2F"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IIAEM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IIAEM"]; ?></th>
      <th scope="row"><?php echo $datoArq["IIAM"]+$datoArq["IIAF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTIIAM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTIIAF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IIApublico"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IIAprivado"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IIAsocial"]; ?></th>
      <td>@mdo</td>
      <td>@twitter</td>
    </tr>
    <tr>
    
    <th scope="row">INGENIERÍA EN SISTEMAS COMPUTACIONALES</th>
    <th scope="row"><?php echo $datoArq["ISCM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ISCF"]; ?></th>
      <th scope="row"><?php echo $datoArq["ISC1M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ISC1F"]; ?></th>
      <th scope="row"><?php echo $datoArq["ISC2M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ISC2F"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ISCEM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ISCEM"]; ?></th>
      <th scope="row"><?php echo $datoArq["ISCM"]+$datoArq["ISCF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTISCM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTISCF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ISCpublico"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ISCprivado"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["ISCsocial"]; ?></th>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
   
    <th scope="row">LICENCIATURA EN ADMINISTRACIÓN</th>
    <th scope="row"><?php echo $datoArq["LAM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["LAF"]; ?></th>
      <th scope="row"><?php echo $datoArq["LA1M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["LA1F"]; ?></th>
      <th scope="row"><?php echo $datoArq["LA2M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["LA2F"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["LAEM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["LAEM"]; ?></th>
      <th scope="row"><?php echo $datoArq["LAM"]+$datoArq["LAF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTIAM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTIAF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IApublico"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IAprivado"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IAsocial"]; ?></th>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
    
    <th scope="row">INGENIERÍA EN GESTIÓN EMPRESARIAL</th>
    <th scope="row"><?php echo $datoArq["IGEM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IGEF"]; ?></th>
      <th scope="row"><?php echo $datoArq["IGE1M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IGE1F"]; ?></th>
      <th scope="row"><?php echo $datoArq["IGE2M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IGE2F"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IGEEM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IGEEM"]; ?></th>
      <th scope="row"><?php echo $datoArq["IGEM"]+$datoArq["IGEF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTIGEM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTIGEF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IGEpublico"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IGEprivado"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IGEsocial"]; ?></th>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
  
    <th scope="row">INGENIERÍA EN ADMINISTRACIÓN</th>
    <th scope="row"><?php echo $datoArq["IAM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IAF"]; ?></th>
      <th scope="row"><?php echo $datoArq["IA1M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IA1F"]; ?></th>
      <th scope="row"><?php echo $datoArq["IA2M"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IA2F"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IAEM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IAEM"]; ?></th>
      <th scope="row"><?php echo $datoArq["IAM"]+$datoArq["IAF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTIAM"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["GTIAF"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IApublico"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IAprivado"]; ?></th>
      <th scope="row" colspan="1"><?php echo $datoArq["IAsocial"]; ?></th>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <?php  
  }
}
        ?>
    
  </tbody>
</table>
  </div>
  </body>
 

 
 
</html>
