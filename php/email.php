<?php 
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';



$fullMessage = "Nombre: " . $name . "\nCorreo: " . $email . "\nMensaje: " . $message;


ini_set('SMTP', 'localhost');
ini_set('smtp_port', 25);


if (mail('jose.correax@gmail.com', 'Message from Garden of Eden Web Page', $fullMessage)) {
    echo "<script>alert('Mensaje enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='../index.php'\",1000)</script>";
} else {
    echo "<script>alert('Error al enviar el mensaje')</script>";
    echo "<script>setTimeout(\"location.href='#'\",1000)</script>";
}


?>