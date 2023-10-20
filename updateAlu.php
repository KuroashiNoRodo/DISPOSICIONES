<?php
    
   
    
    include_once 'database.php';
    $alu_nc = $_POST["alu_nc"];
    $alu_nombre = $_POST["alu_nombre"];
    $alu_seso = $_POST["alu_seso"];
    $alu_domicilio = $_POST["alu_domicilio"];
    $alu_telefono = $_POST["alu_telefono"];
    $fk_alu_carrera = $_POST["fk_alu_carrera"];
    $alu_ingreso = $_POST["alu_ingreso"];
    $alu_egreso = $_POST["alu_egreso"];
    $alu_titulado = $_POST["alu_titulado"];
    // $alu_estado = $_POST["alu_estado"];
    $alu_email = $_POST["alu_email"];
    // $alu_semestre = $_POST["alu_semestre"];
    $fk_id_aplicacion = $_POST["fk_id_aplicacion"];
    $id_alumno = $_POST["id_alumno"];

    $sentencia = $conn->prepare("UPDATE tb_alumno SET alu_nc = ?,alu_nombre = ?,alu_seso = ?,alu_domicilio = ?
    ,alu_telefono = ?,fk_alu_carrera = ?,alu_ingreso = ?,alu_egreso = ?,alu_titulado = ?
    ,alu_email = ?,fk_id_aplicacion =? where  id_alumno = ?;");
     $resultado = $sentencia->execute([$alu_nc, $alu_nombre, $alu_seso, $alu_domicilio , $alu_telefono,
     $fk_alu_carrera,$alu_ingreso,$alu_egreso,$alu_titulado,$alu_email,$fk_id_aplicacion,
     $id_alumno]);

   
    


    if ($resultado === TRUE) {
        header('Location: listaAlu.php?mensaje=editado');
    } else {
        // header('Location: index.php?mensaje=error');
        // exit();
    }
    
?>