<?php
include("database.php");
// $con=conectar();

$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
// $p4=$_POST['p4'];
$p5=$_POST['p5'];
$p6=$_POST['p6'];
$p7=$_POST['p7'];
$p8=$_POST['p8'];
$p9=$_POST['p9'];
$p10=$_POST['p10'];
$p11=$_POST['p11'];
$p12=$_POST['p12'];
$p13=$_POST['p13'];
$p14=$_POST['p14'];
$p15=$_POST['p15'];
$p16=$_POST['p16'];
$p17=$_POST['p17'];
$p18=$_POST['p18'];
$p19=$_POST['p19'];
$p20=$_POST['p20'];
$p21=$_POST['p21'];
$p22=$_POST['p22'];
$p23=$_POST['p23'];
$p24=$_POST['p24'];
$p25=$_POST['p25'];
$p26=$_POST['p26'];
$p27=$_POST['p27'];
$p28=$_POST['p28'];
$p29=$_POST['p29'];
$p30=$_POST['p30'];
$p31=$_POST['p31'];
$p32=$_POST['p32'];
$p33=$_POST['p33'];
$p34=$_POST['p34'];
$p35=$_POST['p35'];
$p36=$_POST['p36'];
$p37=$_POST['p37'];
$p38=$_POST['p38'];
$p39=$_POST['p39'];
$p40=$_POST['p40'];
$p41=$_POST['p41'];
$p42=$_POST['p42'];
$p43=$_POST['p43'];
$p44=$_POST['p44'];
$p45=$_POST['p45'];
$id_empresa=$_POST['id_empresa'];
$encuesta=$_POST["encuesta"];



if($encuesta==null || $encuesta == 0){
    $encuesta =0;
   }
    $encuesta ++;


$sentencia = $conn->prepare("INSERT INTO tb_en_empresa(p1,p2,p3,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,
p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,p31,p32,p33,p34,p35,p36,p37,p38,p39,p40,p41,p42,p43,
p44,p45) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$p1,$p2,$p3,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,
    $p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20,$p21,$p22,$p23,$p24,$p25,$p26,$p27,$p28,$p29,$p30,$p31,$p32,$p33
    ,$p34,$p35,$p36,$p37,$p38,$p39,$p40,$p41,$p42,$p43,$p44,$p45]);

    echo $resultado;

    if($resultado === true){   
        $sentencia2 = $conn->prepare("UPDATE tb_empresa SET encuesta = ? where id_empresa = ?;");
     $resultado3 = $sentencia2->execute([$encuesta,$id_empresa]);
     

     echo "entro";
     echo $resultado3;
    
    
    if($resultado3 === true ){   
        header('Location: listaEmp.php');
}   
    }
     else {
        header('Location: Error.php');
        exit();
    }
?>