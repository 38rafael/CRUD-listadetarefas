<?php 
require_once 'conecta.php';

?>
<?php 

$tarefas = "SELECT * FROM tarefas";
$query   = mysqli_query($con, $tarefas);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Tarefas</title>
</head>
<body>
	<h1>Suas Tarefas</h1>
	<a href="inserir.php">Inserir nova tarefa</a>
	<ul>
		<?php 

		while ($fetch = mysqli_fetch_assoc($query)) {

			?>
			<li><h3><?php echo $fetch['titulo']; ?></h3></li>
			<li><?php echo $fetch['tarefa']; ?></li><br>
			<a href="excluir.php?id=<?php echo $fetch['id'] ?>"><button>Excluir </button> </a> // <a href="atualiza.php?id=<?php echo $fetch['id'] ?>"> <button>Atualizar</button></a>
			<hr>
			<?php
		}
		?>
	</ul>
</body>
</html>