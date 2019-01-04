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
 
///////////////////////////////////////LIBRERIAS PHP MAILER//////////////////////////// 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
include 'conexion.php';
include 'permisos.php';
////////////////////////////////////////////////////////////////////////////////////

switch ($Permisos) {
    case 'admin':
    case 'semiAdmin':


//*******************************COMPRUEBO SI EL EMAIL ESTA BIEN ESCRITO*******************************

function validarEmail($str)
{
  $result = (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
  
  if ($result)
  {
    list($user, $domain) = split('@', $str);
    
    $result = checkdnsrr($domain, 'MX');
  }
  
  return $result;
}
$email=$_POST['email'];
if ((validarEmail($email))==0) {
	
	header("location: alta_clientes_admin.php?f=3");
}






       
//******************************COMPRUEBO SI EL USUARIO YA EXISTE***************************************

$client="SELECT * FROM clientes";
$ResCliente=$base ->prepare ($client);
$ResCliente->execute();
$ResCliente->setFetchMode(PDO::FETCH_ASSOC); 
 while ($clien=$ResCliente->fetch()) {

    if (strcmp($_POST['dni'], $clien['dni']) === 0){
    ++$bandera;
}
  
  
}
echo $bandera;
if ($bandera==0) {


//************************************* GENERO LA CONTRASEÑA ALEATORIA*********************************

$contrasena = substr( md5(microtime()), 1, 9);
$passCrypt=password_hash($contrasena, PASSWORD_DEFAULT, array("cost"=>12));

//**************************************INSERTAR USUARIO***********************************************
$insertar="INSERT INTO clientes (dni, password, nombre, apellido, fechadenacimiento, telefono, direccion, email) VALUE (:dni, :pass, :nom, :ape, :fecha, :telefono, :direcc, :email)";
  
$resultado=$base-> prepare ($insertar);
$resultado->execute(Array(":dni"=>$_POST['dni'], ":pass"=>$passCrypt, ":nom"=>$_POST['nombre'], ":ape"=>$_POST['apellido'], ":fecha"=>$_POST['Naci'], ":telefono"=>$_POST['telef'], ":direcc"=>$_POST['direcc'], ":email"=>$_POST['email']));


//********************************buscar id del registro insertado*****************************
$idRregistro="SELECT * FROM clientes WHERE dni=:dni";
$resRegistro=$base-> prepare ($idRregistro);
$resRegistro->execute(array(':dni' =>$_POST['dni']  ));
$idCliente=$resRegistro->fetch(PDO::FETCH_ASSOC);

//***********************************ESTABLECER PERMISOS ******************************************
$aplicaciones="cliente";
$permisos="INSERT INTO permisos (id_clientes, aplicaciones_cod) VALUE (:id, :app)";
$resPermisos=$base-> prepare ($permisos);
$resPermisos->execute(array(":id"=>$idCliente['id_clientes'], ":app"=>$aplicaciones));

////////////////////////////////////////SECCION DE MAIL///////////////////////////////////////////////

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.hostinger.com.ar';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'consultas@myvetanimalia.online';                 // SMTP username
    $mail->Password = 'animalia';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('consultas@myvetanimalia.online', 'Animalia');
    $mail->addAddress($_POST['email'] , 'Joe User');     // Add a recipient
    /*$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Usuario Creado!';
    $mail->Body    = "Su contraseña Es:".$contrasena."<br><br>Ingrese al sistema con su DNI y su contrasena y posteriormente seleccione la opción de cambiar contraseña. ";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Registro Realizado con Exito!';
    header("location: alta_clientes_admin.php?f=1");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


}else{
   header("location: alta_clientes_admin.php?f=2");
}

?>
</body>
</html>
<?php


        break;
}
?>