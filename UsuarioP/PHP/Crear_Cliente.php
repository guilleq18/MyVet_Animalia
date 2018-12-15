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
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$usuario=$_POST['usuario'];
$sexo="masc";
$datepicker=$_POST["datepicker"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$Email=$_POST["email"];




try{

/////////////////////////////////////////////traigo el id del usuario creado/////////////////////////////////////////////////

$base=new PDO("mysql:host=localhost; dbname=my_vet_animalia", "root", "");
 
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sqlidUsuario="SELECT * FROM usuarios WHERE nombre_de_usuario= :usuario ";

$ResUsuario=$base-> prepare ($sqlidUsuario);

$ResUsuario->execute(array(":usuario"=>$usuario,));

$idUsuario=$ResUsuario->fetch(PDO::FETCH_ASSOC);

/////////////////////////////////////////////////Inserto datos Clientes//////////////////////////////////////////////////////////



$sql="INSERT INTO clientes (nombre, apellido, id_usuario, sexo, fecha_de_nacimiento, telefono, direccion, correo_electronico) VALUES (:nombre, :apellido, :idUser, :sexo, :datepicker, :telefono, :direccion, :email)";

$resultado=$base-> prepare ($sql);

$resultado->execute(array(":nombre"=>$nombre, ":apellido"=>$apellido, ":idUser"=>$idUsuario['id'], ":sexo"=>$sexo, ":datepicker"=>$datepicker, ":telefono"=>$telefono, ":direccion"=>$direccion, ":email"=>$Email));

}catch(Exception $e)  {

    die("error: " . $e->getMessage());

}  

////////////////////////////////////////SECCION Extraccion de usuario y contraseña////////////////////////////////////
/*$sqlmail="SELECT * FROM usuarios WHERE id= :ID";
$ResMail=$base-> prepare ($sqlmail);
$ResMail->execute(array(":ID"=>$idUser,));

$idUsuario=$ResMail->fetch(PDO::FETCH_ASSOC);
/*echo "El id del usuario es " . $idUsuario['id'] ;
echo "El nombre del usuario es " . $idUsuario['nombre_de_usuario'] ;
echo "la contraseña del usuario es " . $idUsuario['contrasena'] ;*/


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
    $mail->addAddress($Email, 'Joe User');     // Add a recipient
    /*$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Confirmación de Registro';
    $mail->Body    = "Bienvenidos a MY Vet Animalia <br></br> para acceder tu nombre de usuario es: " .$idUsuario['nombre_de_usuario']. "<br></br> la contraseña es: " .$idUsuario['contrasena']. "<br></br> Por favor Ingrese con los datos suministrados y cambie su contraseña";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Registro Realizado con Exito!';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

header('Location: ../index.php');

?>
</body>
</html>