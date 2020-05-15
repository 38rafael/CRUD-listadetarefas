<?php 
require_once "conecta.php";

if (isset($_POST['titulo'])) {
	$titulo = $_POST['titulo'];
	$tarefa = $_POST['tarefa'];

	$insere = "INSERT INTO tarefas (titulo, tarefa) VALUES ('$titulo','$tarefa')";
	$query  = mysqli_query($con, $insere);
	header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inserir Nova Tarefa</title>
</head>
<body>

	<form action="inserir.php" method="post">
		<label>Titulo:</label>
		<input type="text" name="titulo"><br>
		<label>Tarefa:</label>
		<input type="text" name="tarefa"><br>
		<button>Enviar</button>
	</form>

</body>
</html>