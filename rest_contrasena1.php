<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php   
///////////////////////////////////////LIBRERIAS PHP MAILER///////////////////////////////////////////////////////////// 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
//require 'conexion.php';
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





////////////////////////////////////////////////////////////////////////////////////////////////
                    // LA BD TRAE LOS DATOS DE LA TABLA CLIENTES// 
try{
$base=new PDO("mysql:host=localhost; dbname=myvet_animalia", "root", "");
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $Consul_Datos ="SELECT * FROM clientes WHERE dni=:DNI "  ;               
 $Resultado= $base->prepare ($Consul_Datos);
 $Resultado-> execute(array(":DNI"=>$_POST['dni']));//$POST trae la info del formulario trayendo el nombre del input

 $Resultado->setFetchMode(PDO::FETCH_ASSOC); 
 $Cliente = $Resultado ->fetch();
  if ($_POST ['dni']== $Cliente['dni']){
    if ($_POST['email']== $Cliente['email']){
      
      $idcli=$Cliente['id_clientes'];
      
      $contrasena = substr( md5(microtime()), 1, 9);
      
    

$passCrypt=password_hash($contrasena, PASSWORD_DEFAULT, array("cost"=>12));

      $sql="UPDATE clientes SET password=:pass WHERE id_clientes=:id";


      $Resultado=$base->prepare($sql);
      $Resultado->execute(array("id"=>$idcli, "pass"=>$passCrypt));
      





    } else {
      header ("location: rest_contrasena.php?f=1");
    }

  }else {
      header ("location: rest_contrasena.php?f=1");
  }

}catch(Exception $e)  {

    die("error: " . $e->getMessage());

}  

/////////////////////////////////////////////////SECCION DE MAIL////////////////////////////////////////////////////////

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'william_18@live.com.ar';                 // SMTP username
    $mail->Password = 'las24horas';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('william_18@live.com.ar', 'Mailer');
    $mail->addAddress($Cliente['email'] , 'Joe User');     // Add a recipient
    /*$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contraseña Reestablecida';
    $mail->Body    = "Su contraseña ha sido reestablecida <br><br> su nueva contraseña es:".$contrasena."<br><br>Ingrese nuevamente al sistema con su DNI y su nueva contrasena. ";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Registro Realizado con Exito!';
    header("location: rest_contrasena.php?f=2");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}



?>
</body>
</html>