<?php
require './src/php-mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'carlos.lima101@etec.sp.gov.br';                 // SMTP username
$mail->Password = 'ADIzombie666';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('carlos.lima101@etec.sp.gov.br', 'Adi');
$mail->addAddress('carlos.lima101@etec.sp.gov.br', 'Adi Granolinha');     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Adi granolinha';
$mail->Body    = '<h1>'.json_encode($_POST).'</h1>';
$mail->send();

header('location:/');