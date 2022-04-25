<?php

$nome = utf8_encode($_POST['nome']);
$sobrenome = utf8_encode($_POST['sobrenome']);
$email = utf8_encode($_POST['email']);
$mensagem = utf8_encode($_POST['mensagem']);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './lib/vendor/autoload.php';


$mail = new PHPMailer(true);

//Configurações do servidor de e-mail:


$mail->Host = "smtp.gmail.com";
$mail->isSMTP();  
$mail->Port = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = "true";
$mail->Username = "hugoxtl125@gmail.com";
$mail->Password = "8830325ebf36";

//Configuração de mensagem:

$mail->setFrom($mail->Username, "Hugo"); //Remetente
$mail->addAddress("hugosantosadm125@gmail.com"); // Destinátario
$mail->Subject = "Entrando em Contato";  // Assunto do e-mail

$conteudo_email ="
Você recebeu uma mensagem de $nome $sobrenome ($email);
<br><br>

Mensagem:<br>
$mensagem
";

$mail->IsHTML(true);
$mail->Body = $conteudo_email;

if ( $mail->send()){

    echo("<script>alert('E-mail enviado com sucesso !!!');location.href = 'contatoCliente.php';</script>");

} else {

    echo("<script>alert('E-mail não enviado com sucesso .')</script>") . $mail->ErrorInfo;
}




?>