<?php    


   
    include_once 'database.php';
 
    include("Mailer/src/PHPmailer.php");
    include("Mailer/src/SMTP.php");
    include ("Mailer/src/Exception.php");
    $alu_email = $_POST["alu_email"];
    $encuesta = $_POST["encuesta"];
    $email = $_POST["email"];
    $id_alumno = $_POST["id_alumno"];
    $enviados = $_POST["enviados"];

    try{
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug=0;
       
        // Datos personales
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "587";
        $mail->Username = "didisee@lahuerta.tecmm.edu.mx";
        $mail->Password = "wdmmvzjcrztytvbt";
        $mail->SMTPAuth = "login";
        $mail->SMTPSecure = "tls";

        $mail->setFrom('didisee@lahuerta.tecmm.edu.mx', 'TECMM DIDISEE');
// Destinatario, opcionalmente también se puede especificar el nombre
$mail->addAddress($alu_email);
// Copia
$mail->isHTML(true);
// Asunto
$mail->Subject = $encuesta;
// Contenido HTML
$mail->Body = $email;

if(!$mail->send()){
    echo "Error al enviar"; die();
}
    


   if($enviados==null){
    $enviados =0;
   }
    $enviados ++;
   
    $sentencia = $conn->prepare("UPDATE tb_alumno SET enviados = ? where id_alumno = ?;");
     $resultado = $sentencia->execute([$enviados,$id_alumno]);

   


    if ($resultado === TRUE) {
        header('Location: listaAlu.php');
    } else {
        header('Location: Error.php');
        exit();
    }



 


// $mail-&gt;send();

    }catch(Exception $e){
    
    }

   
    
?>