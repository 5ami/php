<?php
use PHPMailer\PHPMailer\PHPMailer;
include_once "PHPMailer/PHPMailer.php";
$message = file_get_contents('header.html').'<tr dir ="rtl"> <td style="line-height: 2.5;padding:0;margin:0 ;font-size:13px;" >'.$_POST["msg"].file_get_contents('footer.html');
$to   = $_POST["to"];
$arr = explode(',', $to);
$subject = $_POST["sbj"];
foreach ($arr as $key => $value) {
    $to='';
    $to =$value;
    $email = $newPage['email'];
            $name = '';
            $mail = new PHPMailer();
            $mail->setFrom('support@tsaoq.com');
            $mail->CharSet = 'UTF-8';
            $mail->addAddress($to);
            $mail->Subject = $subject;
            $mail->isHTML(true);
            $mail->Body = $message;
            if($mail->send()){
              echo 'Message sent!';
            }
            else {
              echo 'Message not sent!';
            }
          }
?>
