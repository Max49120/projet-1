<?php                                                   //Cette page est appelée dans par le formulaire, elle permet d'envoyer un mailautomatique à chaque nouvel inscrit.

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $preference=$_POST['preference'];
    $disponibilites=$_POST['disponibilites'];
    $message=$_POST['message'];

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'maxime.nivot.mn@gmail.com';                 // SMTP username
    $mail->Password = 'Husabergte125';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $firstname);
    $mail->addAddress('maxime.nivot.mn@gmail.com', 'Maxime Nivot');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nouveau rédacteur inscrit sur Scribe.io';
    $mail->Body    = $firstname $lastname 'vient de s inscrire sur Scribe.io. Il est spécialisé dans le' $preference 'et est disponible le' $disponibilites'.'<br/> 'Son Email: '$email 'Il a écrit: ' $message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}}

else {
    echo "Message Not Sent";
}

?>
