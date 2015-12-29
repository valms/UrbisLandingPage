<?php

if (isset ( $_POST ['nome'] )) {

	$uf          = $_POST ['uf'];
	$rua         = $_POST ['rua'];
	$rua         = $_POST ['numero'];
	$cep         = $_POST ['cep'];
	$nome        = $_POST ['nome'];
	$email       = $_POST ['email'];
	$cidade      = $_POST ['cidade'];
	$bairro      = $_POST ['bairro'];
	$complemento = $_POST ['complemento'];


	var_dump ( $_POST ['nome'] );
}
