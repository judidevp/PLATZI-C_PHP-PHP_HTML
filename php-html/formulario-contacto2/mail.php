<?php
require ("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html=false)
{
    //configuracion inicial de nuestro servidor de correos

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    //$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->Host = 'smtp.gmail.com';

    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 


    $phpmailer->SMTPAuth = true;
    //$phpmailer->Port = 2525;
    $phpmailer->Port = 465;
//$phpmailer->Username = '95f8d5dbfad08f';
    $phpmailer->Username = 'jhonnnyeimiss@gmail.com';
    //$phpmailer->Password = 'itqvrfsuflgtgqrn';
    $phpmailer->Password = 'zbxjevvbfvjvkdyq';

    // destinatarios

    $phpmailer->setFrom('JuDiDev@gmail.com', 'MiPrimerEnvio');
    $phpmailer->addAddress($email, $name); 

    //definiendo contenido 

    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $phpmailer->send();
}

?>
