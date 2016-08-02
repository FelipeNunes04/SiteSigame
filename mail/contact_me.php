<?php
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		echo (utf8_decode("O e-mail digitado não é válido!"));
		return false;
	}
		
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
		
	$to = 'fabioluzti@hotmail.com'; 
	$email_subject = "Enviada pelo formulário de contato do site da siga-me";
	$email_body = "Detalhes da Mensagem:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
	$headers = "De: $email_address\n";
	//$headers .= "Reply-To: $email_address";	
	mail($to,$email_subject,$email_body,$headers);
	return true;
?>