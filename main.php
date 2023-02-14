<?php

    require 'PHPMailer/PHPMailerAutoload.php';

    class main{
        public function sendEmail($email, $msg){
            $html = "
                <div style='background:rgba(231,191,191,.8);width:80%;line-height:40px;padding:30px'>
                <h3>".$msg."</h3>
                </div>
            ";
            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'vmi490153.contaboserver.net';
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->isHTML(true);
            $mail->Username = 'debjit@dedohost.com';
            $mail->Password = 'BABURAO123123';
            $mail->setFrom('debjit@dedohost.com','Debjit from Dedohost');
            $mail->addAddress($email);
            $mail->addReplyTo('debjit@dedohost.com');
            $mail->Subject = 'Email using PHPMailer';
            $mail->Body = $html;

            if(!$mail->send()){
                echo "<span style='color:red'>Error sending email...</span>";
            }
            else{
                echo "<span style='color:green'>Sent successfully!!!</span>";
            }
        }
    }

?>