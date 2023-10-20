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
    
    
    if(repetido($em_nombre,$conn)==1){
        
        header('Location: altaEmp.php?mensaje=repetido');
        // header("Location:".$_SERVER[HTTP_REFERER]."?mensaje=repetido");
        
  
         
    }else{
   
        $sentencia = $conn->prepare("INSERT INTO  tb_empresa ( em_nombre,em_domicilio,em_municipio
        ,em_ciudad,em_estado,em_numero,em_status,em_fecha_registro,em_email)VALUES(?,?,?,?,?,?,?,?,?);");
         $resultado = $sentencia->execute([$em_nombre,$em_domicilio,$em_municipio,$em_ciudad,$em_estado,
         $em_numero,$em_status,$em_fecha_registro,$em_email]);
    
    
        if ($resultado === TRUE) {
            header('Location: listaEmp.php?mensaje=Creado');
        } else {
            // header('Location: index.php?mensaje=error');
            exit();
        }
    }
        function repetido($em_nombre,$conn){
            $server = 'localhost:3306';
            $username = 'root';
            $password = '';
            $database = 'didisee';
            $conn = mysqli_connect($server, $username, '',$database);
            $sql="SELECT * from tb_empresa where em_nombre=$em_nombre";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)> 0){
                return 1;
            }else{
                return 2;
            }
        }
   
?>