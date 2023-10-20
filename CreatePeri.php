<?php
    
    
    include_once 'database.php';
    // $conn= conn();
    $apli_generacion = $_POST["apli_generacion"];
    $apli_fecha_ini = $_POST["apli_fecha_ini"];
    $apli_fecha_fin = $_POST["apli_fecha_fin"];
    $status = $_POST["status"];
 
    
    
 
   
        $sentencia = $conn->prepare("INSERT INTO  tb_aplicacion ( apli_generacion,apli_fecha_ini,apli_fecha_fin
        ,status)VALUES(?,?,?,?);");
         $resultado = $sentencia->execute([$apli_generacion,$apli_fecha_ini,$apli_fecha_fin,$status]);
    
    
        if ($resultado === TRUE) {
            header('Location: listaPeri.php?mensaje=creado');
        } else {
            // header('Location: index.php?mensaje=error');
            exit();
        }

       
        
   
?>