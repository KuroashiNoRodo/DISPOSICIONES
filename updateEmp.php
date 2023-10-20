<?php
    
    
    include_once 'database.php';
    // $conn= conn();
    $em_nombre = $_POST["em_nombre"];
    $em_domicilio = $_POST["em_domicilio"];
    $em_municipio = $_POST["em_municipio"];
    $em_ciudad = $_POST["em_ciudad"];
    $em_estado = $_POST["em_estado"];
    $em_numero = $_POST["em_numero"];
    $em_status = $_POST["em_status"];
    $em_fecha_registro = $_POST["em_fecha_registro"];
    $em_email = $_POST["em_email"];
    $id_empresa = $_POST["id_empresa"];
    
    
    
   
        $sentencia = $conn->prepare("UPDATE  tb_empresa SET em_nombre=?,em_domicilio=?,em_municipio=?
        ,em_ciudad=?,em_estado=?,em_numero=?,em_status=?,em_fecha_registro=?,em_email=?
        where id_empresa = ?;");
         $resultado = $sentencia->execute([$em_nombre,$em_domicilio,$em_municipio,$em_ciudad,$em_estado,
         $em_numero,$em_status,$em_fecha_registro,$em_email,$id_empresa]);
    
    
        if ($resultado === TRUE) {
            header('Location: listaEmp.php?mensaje=editado');
        } else {
            // header('Location: index.php?mensaje=error');
            exit();
        }
    
    
   
?>