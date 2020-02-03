<?php

// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);
	$numero = mysqli_escape_string($connect, $_POST['numero']);
	$bairro = mysqli_escape_string($connect, $_POST['bairro']);
	$cidade = mysqli_escape_string($connect, $_POST['cidade']);
	$cep = mysqli_escape_string($connect, $_POST['cep']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$cpf = mysqli_escape_string($connect, $_POST['cpf']);
	$uf = mysqli_escape_string($connect, $_POST['uf']);
	
	$id = mysqli_escape_string($connect, $_POST['id']);
	

	
	$sql = " UPDATE cliente SET nome = '$nome', endereco = '$endereco', numero = '$numero', bairro = '$bairro', cidade = '$cidade', cep = '$cep', email = '$email', cpf = '$cpf', uf = '$uf' WHERE id = '$id'" ;

	if(mysqli_query($connect, $sql)):
		
		header('Location: ../clientes.php?sucesso');
	else:
		
		header('Location: ../clientes.php?error');
	endif;

endif;


