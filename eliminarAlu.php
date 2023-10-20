<?php 
    if(!isset($_GET['id_alumno'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'database.php';
    $id_alumno = $_GET['id_alumno'];
    

    $sentencia = $conn->prepare("UPDATE tb_alumno SET alu_estado = 'inactivo'  where id_alumno = ?;");
    $resultado = $sentencia->execute([$id_alumno]);

    if ($resultado === TRUE) {
        header('Location: listaAlu.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>