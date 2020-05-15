<?php 
require_once "conecta.php";

if ($_GET['id']) {
	$id = $_GET['id'];
	$seleciona = "SELECT * FROM tarefas WHERE id = $id";
	$query     = mysqli_query($con, $seleciona);
	$fetch     = mysqli_fetch_assoc($query);
}

if (isset($_POST['titulo'])) {
	$id     = $_POST['id'];
	$titulo = $_POST['titulo'];
	$tarefa = $_POST['tarefa'];

	$atualiza = "UPDATE tarefas SET titulo='$titulo', tarefa = '$tarefa' WHERE id = $id ";
	$query  = mysqli_query($con, $atualiza);
	header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inserir Nova Tarefa</title>
</head>
<body>

	<form action="atualiza.php" method="post">
		<label>Titulo:</label>
		<input type="text" name="titulo" value="<?php echo $fetch['titulo'] ?>"><br>
		<label>Tarefa:</label>
		<input type="text" name="tarefa" value="<?php echo $fetch['tarefa'] ?>"><br>
		<input type="hidden" name="id" value="<?php echo $fetch['id'] ?>"><br>
		<button>Enviar</button>
	</form>

</body>
</html>