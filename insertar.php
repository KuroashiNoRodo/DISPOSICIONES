<?php
include("database.php");
// $con=conectar();

$alu_nombre=$_POST['alu_nombre'];
$alu_nc=$_POST['alu_nc'];
$alu_seso=$_POST['alu_seso'];
$alu_estado_civil=$_POST['alu_estado_civil'];
// $alu_domicilio=$_POST['alu_domicilio'];
// $alu_telefono=$_POST['alu_telefono'];
// $alu_carrera=$_POST['alu_carrera'];
// $alu_ingreso=$_POST['alu_ingreso'];
// $alu_egreso=$_POST['alu_egreso'];
// $alu_titulado=$_POST['alu_titulado'];
// $alu_estado=$_POST['alu_estado'];
// $alu_email=$_POST['alu_email'];
// $alu_semestre=$_POST['alu_semestre'];
// $alu_curp=$_POST['alu_curp'];
// $alu_generacion=$_POST['alu_generacion'];
// $alu_edad=$_POST['alu_edad'];
// $encuesta=$_POST['encuesta'];
// $enviados=$_POST['enviados'];


// $sql="INSERT INTO tb_alumno VALUES('$alu_nombre','$alu_nc','$alu_seso','$alu_estado_civil')";
// $query= mysqli_query($con,$sql);

// if($query){
//     Header("Location: listaAlu.php");
    
// }else {
// }

$sentencia = $conn->prepare("INSERT INTO tb_alumno(alu_nombre, alu_nc, alu_seso, alu_estado_civil) VALUES (?, ?, ?, ?);");
    $resultado = $sentencia->execute([$alu_nombre,$alu_nc,$alu_seso,$alu_estado_civil]);

    if ($resultado === TRUE) {
        header('Location: listaAlu.php');
    } else {
        header('Location: listaAlu.php');
        exit();
    }
?>