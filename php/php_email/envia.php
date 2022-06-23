<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];





$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = '2022ultranetwork@gmail.com';
	$mail->Password = 'vyvrrsrgzcaleour';
	$mail->Port = 587;

	$mail->setFrom('2022ultranetwork@gmail.com');
	$mail->addAddress('2022ultranetwork@gmail.com');
	
	$mail->isHTML(true);
	$mail->Subject = 'contato';
	$mail->Body = 'Chegou o email do <strong>'. $nome .'</strong><br>Email: '. $email .' <br>  Telefone:'. $tel. ' '  ;
	$mail->AltBody = 'Chegou o email do <strong>'. $nome .'</strong><br>Email: '. $email .' <br>  Telefone:'. $tel. ' ';

	if($mail->send()) {
		echo 'Email enviado com sucesso';
		echo "<script>window.location='https://api.whatsapp.com/send?phone=5522999895793'</script>";
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}