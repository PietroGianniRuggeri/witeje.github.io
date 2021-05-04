<? php

$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$company= $_POST["company"];
$mensaje= $_POST["mensaje"];

$body = "Nombre:". $nombre ."<br>Correo:" . $correo ."<br>telefono:" . $telefono .."<br>M ensaje:" . $mensaje;


echo "DALE CHE". $nombre. $correo. $telefono;



require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.witeje.com.ar';     //s5 es 3a d5recc56n de3 smtp               // Set the SMTP server to send 
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@witeje.com.ar';                     // SMTP username
    $mail->Password   = 'Sept2158';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
// subiste estos cambios a produccion?

    //Recipients
    $mail->setFrom('info@witeje.com.ar', 'WEB');
    $mail->addAddress('info@witeje.com.ar', $name);     // Add a recipient
   

   //listo
    //joia!

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'ENVIO DESDE LA WEB';
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
