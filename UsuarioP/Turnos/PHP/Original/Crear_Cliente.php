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
$idUser=$_POST["idUser"];
$sexo=$_POST["sexo"];
$datepicker=$_POST["datepicker"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$Email=$_POST["email"];




try{

  // datos de conexion
$base=new PDO("mysql:host=localhost; dbname=my_vet_animalia", "root", "");
 
  //propiedades de la conexion

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //intruccion para ver si existe el usuario en la bd con "MARCADORES"
//$sql="SELECT * FROM usuarios Where nombre_de_usuario= :usuario AND contrasena= :contrasena";

  //instroccion para insertar registros dentro de una tabla
$sql="INSERT INTO clientes (nombre, apellido, id_usuario, sexo, fecha_de_nacimiento, telefono, direccion, correo_electronico) VALUES (:nombre, :apellido, :idUser, :sexo, :datepicker, :telefono, :direccion, :email)";

  //realizamos una consulta preparada
$resultado=$base-> prepare ($sql);

//ejecutamos asociando los marcadores con las variables
$resultado->execute(array(":nombre"=>$nombre, ":apellido"=>$apellido, ":idUser"=>$idUser, ":sexo"=>$sexo, ":datepicker"=>$datepicker, ":telefono"=>$telefono, ":direccion"=>$direccion, ":email"=>$Email));

//echo "Registro Insertado";
//header('Location: Enviar_Registro_Email.php');



}catch(Exception $e)  {

    die("error: " . $e->getMessage());

}  

////////////////////////////////////////SECCION Extraccion de usuario y contraseña////////////////////////////////////
$sqlmail="SELECT * FROM usuarios WHERE id= :ID";
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