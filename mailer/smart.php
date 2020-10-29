<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


$mail->isSMTP(); 
$mail->Host = 'smtp.yandex.ru'; 
$mail->SMTPAuth = true;
$mail->Username = 'olazolkina@yandex.ru';
$mail->Password = 'ola5071993';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
 
$mail->setFrom('olazolkina@yandex.ru', 'Resume');
$mail->addAddress('olazolkina@yandex.ru');

$mail->isHTML(true);

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . ' <br>
	E-mail: ' . $email . '<br>
	Text: ' . $text . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>