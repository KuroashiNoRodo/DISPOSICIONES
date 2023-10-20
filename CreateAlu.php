<?php
    
    
    include_once 'database.php';
    // $conn= conn();
    $alu_nc = $_POST["alu_nc"];
    $alu_nombre = $_POST["alu_nombre"];
    $alu_seso = $_POST["alu_seso"];
    $alu_domicilio = $_POST["alu_domicilio"];
    $alu_telefono = $_POST["alu_telefono"];
    // $alu_carrera = $_POST["alu_carrera"];
    $alu_ingreso = $_POST["alu_ingreso"];
    $alu_egreso = $_POST["alu_egreso"];
    $alu_titulado = $_POST["alu_titulado"];
    // $alu_estado = $_POST["alu_estado"];
    $alu_email = $_POST["alu_email"];
    // $alu_semestre = $_POST["alu_semestre"];
    $fk_id_aplicacion = $_POST["fk_id_aplicacion"];
    $fk_alu_carrera = $_POST["fk_alu_carrera"];

    $fecha_ingreso = date("Y-m-d", strtotime($_POST["alu_ingreso"]));
    $fecha_egreso = date("Y-m-d", strtotime($_POST["alu_egreso"]));
    if ($fecha_ingreso > $fecha_egreso) {
        header('Location: altaAlu.php?mensaje=fecha');
        exit();
    }
    
    if(repetido($alu_nc,$conn)==1){
        
        header('Location: altaAlu.php?mensaje=repetido');
         header("Location:".$_SERVER[HTTP_REFERER]."?mensaje=repetido");
        
  
         
    }else{
   
        $sentencia = $conn->prepare("INSERT INTO  tb_alumno ( alu_nc,alu_nombre,alu_seso,alu_domicilio
        ,alu_telefono,fk_alu_carrera,alu_ingreso,alu_egreso,alu_titulado
        ,alu_email,fk_id_aplicacion)VALUES(?,?,?,?,?,?,?,?,?,?,?);");
         $resultado = $sentencia->execute([$alu_nc,$alu_nombre,$alu_seso,$alu_domicilio,$alu_telefono,
         $fk_alu_carrera,$alu_ingreso,$alu_egreso,$alu_titulado,$alu_email,$fk_id_aplicacion]);
    
    
        if ($resultado === TRUE) {
            header('Location: listaAlu.php?mensaje=creado');
        } else {
           var_dump($sentencia);
        }
    }
        function repetido($nc,$conn){
            $server = 'localhost:3306';
            $username = 'root';
            $password = '';
            $database = 'didisee';
            $conn = mysqli_connect($server, $username, '',$database);
            $sql="SELECT * from tb_alumno where alu_nc=$nc";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)> 0){
                return 1;
            }else{
                return 2;
            }
        }
        
   
?>