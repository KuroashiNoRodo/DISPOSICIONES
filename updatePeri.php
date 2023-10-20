<?php
    
    
    include_once 'database.php';
    // $conn= conn();
    $apli_generacion = $_POST["apli_generacion"];
    $apli_fecha_ini = $_POST["apli_fecha_ini"];
    $apli_fecha_fin = $_POST["apli_fecha_fin"];
    $status = $_POST["status"];
    $id_aplicacion = $_POST["id_aplicacion"];
    
    
    
   
        $sentencia = $conn->prepare("UPDATE  tb_aplicacion SET apli_generacion=?,apli_fecha_ini=?,apli_fecha_fin=?
        ,status=? where id_aplicacion = ?;");
         $resultado = $sentencia->execute([$apli_generacion,$apli_fecha_ini,$apli_fecha_fin,$status,$id_aplicacion]);
    
    
        if ($resultado === TRUE) {
            header('Location: listaPeri.php?mensaje=editado');
        } else {
            // header('Location: index.php?mensaje=error');
            exit();
        }
    
    
   
?>