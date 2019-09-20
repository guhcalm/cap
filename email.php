<?php

if(isset($_POST['email'] && !empty($_POST['email']))){

$nome = addcslashes($_POST['name'])
$email = addcslashes($_POST['email'])
$telefone = addcslashes($_POST['telefone'])
$assunto = addcslashes($_POST['assunto'])
$mensagem = addcslashes($_POST['message'])

$to = "cap.ejif@gmail.com";
$subject = "Contato - cap-site"
$body = "Nome: ".$nome. "\r\n".
		"Email: ".$email."\r\n".
		"Email: ".$telefone."\r\n".
		"Email: ".$assunto."\r\n".
		"Mensagem:".$mensagem;
$header = "From:guhcalm@outlook.com"."\r\n".
			"Reply-To:".$email."\r\n".
			"X-Mailer:PHP/".phpversion()
if(mail($to,$subject,$body,$header)){
	echo("Email enviado com sucesso");
}else{
	echo("Email não pode ser enviado, tente novamente");
}



}


?>
