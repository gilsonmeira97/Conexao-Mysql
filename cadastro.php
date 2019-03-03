<?php

	require_once('db.link.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$estado = $_POST['estado'];
	$opcao = $_POST['opcao'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	

	$sql = "insert into interessados(nome, email, telefone, estado, opcao) values('$nome', '$email', '$telefone', '$estado', '$opcao')";

	//Executar a query
	mysqli_query($link, $sql);
		

?>
