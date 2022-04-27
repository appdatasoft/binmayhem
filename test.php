<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$email="jitendrakhedekar67@gmail.com";
    $sub='Welcome to Bin Mania';

    $SMTP_EMAIL = 'smtp@ibrinfotech.com';

    $HOST = 'ssl://gator4202.hostgator.com';

    $PORT = '465';

    $SMTP_PASSWORD = 'Test321$';

    $EmailFromName = 'Bin Mania';

    $mail = new PHPMailer;

    $mail->isSMTP();

    $mail->SMTPDebug = 1;

    $mail->Debugoutput = 'text';

    $mail->Host = $HOST;

    $mail->Port = $PORT;

    $mail->SMTPAuth = true;

    $mail->Username = $SMTP_EMAIL;

    $mail->Password = $SMTP_PASSWORD;

    // $mail->setFrom('info@binmania.com', $EmailFromName);
    $mail->setFrom('mahek201@dispostable.com', $EmailFromName);

    $mail->addReplyTo('mahek201@dispostable.com');

    $mail->addAddress($email);

    $mail->Subject = $sub;

    $mail->IsHTML(true);

    

    $mail->Body = "<br><br>

      Thank you for signing up for Bin Mania! <br> Please use this email as you  voucher to receive $5 off your purchase of 4 or more items. Voucher is valid on Saturdays and Sundays.<br><br><br>

        See you soon!<br><br>

        -Bin Mania team";

    $mail->AltBody = 'This is a confirmation message ';

    $mail->send();
?>