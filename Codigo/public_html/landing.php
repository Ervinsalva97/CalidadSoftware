<?php 
	$destinatario = 'turismo.dcs3@gmail.com';

	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$mensaje = $_POST['direccion'];

	$header = "Enviado desde landin page de dcs3";
	$mensajeCompleto = "De: " . $nombre ."<br> telefono: ".$telefono."<br> Correo: ".$email ."<br> Mensaje: <br>". $mensaje;

mail($destinatario, $nombre, $mensajeCompleto, $header);

	echo "<script>alert('Correo enviado exitosamente')</script>";
	echo "<script> setTimeout(\"location.href='index.php'\",10)</script>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'turismo.dcs3@gmail.com'; // email
$mail->Password = 'creador123'; // password
$mail->setFrom($email, $nombre); // From email and name
$mail->addAddress($destinatario, 'Empresa'); // to email and name
$mail->Subject = 'Mensaje de '.$nombre.' '.$header;
$mail->msgHTML($mensajeCompleto); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Message sent!";
}

?>