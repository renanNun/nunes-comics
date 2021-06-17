<?php

namespace App\Controllers;

use App\Core\App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController
{
    public function sendEmail()
    {
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $name = ucwords($_POST['nome']);
        }

        if (isset($_POST['telefone']) && !empty($_POST['telefone'])) {
            $phone = $_POST['telefone'];
        }

        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];
        }

        if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
            $subject = $_POST['assunto'];
        }

        if (isset($_POST['textarea']) && !empty($_POST['textarea'])) {
            $message = $_POST['textarea'];
        }

        $content = 
        "
        <div><strong>Nome:</strong> {$name}</div>
        <div><strong>E-mail:</strong> {$email}</div>
        <div><strong>Telefone:</strong> {$phone}</div>
        <div><strong>Assunto:</strong> {$subject}</div>
        <div><strong>Mensagem:</strong> {$message}</div>
        ";

        $mail = new PHPMailer;

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Username = '';  // SMTP Username
            $mail->Password = '';  // SMTP Password
            $mail->Port = 587;

            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('nunescomics@gmail.com', 'Nunes Comics');

            //Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $content;
            $mail->AltBody = strip_tags($content);

            if(!$mail->send()) {
                echo 'Não foi possível enviar a mensagem. ';
                echo 'Erro: ' . $mail->ErrorInfo;
            } else {
                redirect('contact');
            }

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
