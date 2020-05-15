<?php 
	
	$dbhost  = 'localhost';
	$dbname  = 'root';
	$dbpass  = '';
	$dbbanco = 'lista_tarefas';

	$con = mysqli_connect($dbhost, $dbname, $dbpass, $dbbanco);
	if (!$con) {
		echo "Erro ao estabelecer a conexão com o banco de dados.".mysqli_error($con);
	}