<?php 
    if(!isset($_GET['id_empresa'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'database.php';
    $id_empresa = $_GET['id_empresa'];
    

    $sentencia = $conn->prepare("UPDATE tb_empresa SET em_status = 'inactivo'  where id_empresa = ?;");
    $resultado = $sentencia->execute([$id_empresa]);

    if ($resultado === TRUE) {
        header('Location: listaEmp.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>