<?php
include("database.php");
// $con=conectar();

$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
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
$p46=$_POST['p46'];
$p47=$_POST['p47'];
$p48=$_POST['p48'];
$p49=$_POST['p49'];
$p50=$_POST['p50'];
$p51=$_POST['p51'];
$p52=$_POST['p52'];
$p53=$_POST['p53'];
$p54=$_POST['p54'];
$p55=$_POST['p55'];
$p56=$_POST['p56'];
$p57=$_POST['p57'];
$p58=$_POST['p58'];
$p59=$_POST['p59'];
$p60=$_POST['p60'];
$p61=$_POST['p61'];
$p62=$_POST['p62'];
$p63=$_POST['p63'];
$alu_nc=$_POST["alu_nc"];
$id_alumno=$_POST["id_alumno"];
$encuesta=$_POST["encuesta"];

if($encuesta==null|| $encuesta == 0){
    $encuesta =0;
   }
    $encuesta ++;


$sentencia = $conn->prepare("INSERT INTO tb_en_alu(p1,p2, p3, p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,
p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,id_alumno) 
VALUES (?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,
    $p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20,$p21,$p22,$p23,$p24,$p25,$p26,$p27,$p28,$p29,$p30,$id_alumno]);

    if ($resultado === TRUE) {
        $sentencia2 = $conn->prepare("INSERT INTO tb_en_alu22(p31,p32, p33, p34,p35,p36,p37,p38,p39,p40,p41,
        p42,p43,p44,p45,p46,p47,p48,p49,p50,p51,p52,p53,p54,p55,p56,p57,p58,p59,p60,p61,p62,p63) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
    $resultado2 = $sentencia2->execute([$p31,$p32,$p33,$p34,$p35,$p36,$p37,$p38,$p39,$p40,$p41,$p42,
    $p43,$p44,$p45,$p46,$p47,$p48,$p49,$p50,$p51,$p52,$p53,$p54,$p55,$p56,$p57,$p58,$p59,$p60,$p61,$p62,$p63]);
    }if($resultado2 ===TRUE){   
        $sentencia3 = $conn->prepare("UPDATE tb_alumno SET encuesta = ? where id_alumno = ?;");
     $resultado3 = $sentencia3->execute([$encuesta,$id_alumno]);
   
    if($resultado3 ===TRUE){   
} header('Location: listaAlu.php');
    } else {
        header('Location: Error.php');
        exit();
    }
?>