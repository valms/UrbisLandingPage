<?php

if (isset ( $_POST ['message'] )) {

	$uf          = $_POST ['uf'];
	$rua         = $_POST ['rua'];
	$cep         = $_POST ['cep'];
	$nome        = $_POST ['nome'];
	$email       = $_POST ['email'];
	$cidade      = $_POST ['cidade'];
	$bairro      = $_POST ['bairro'];
	$complemento = $_POST ['complemento'];





	$to = 'valmar.junior1@gmail.com';
	$subject = '[PROJETO FREELANCE] Contato do Site';

	$headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion ();

	$status = mail ( $to, $subject, $nome, $headers );

	if ($status == TRUE) {
		$res ['sendstatus'] = 'done';

		$res ['message'] = 'Contato enviado! Logo retornarei :-)';
	} else {
		$res ['message'] = 'Falha no formulário! Por favor, entre em contato no email valmar.junior1@gmail.com Ps.: Avisa que o formulário não deu certo ;)';
	}

	echo json_encode ( $res );
}

?>