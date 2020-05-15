<?php 
	require_once "conecta.php";

	if (isset($_GET['id'])) {

		$id      = $_GET['id'];
		$excluir = "DELETE FROM tarefas WHERE id= $id";
		$query   = mysqli_query($con, $excluir);
		header("Location:index.php");
	}

 ?>