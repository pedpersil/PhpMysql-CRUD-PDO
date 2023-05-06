<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar Usuário</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		body {
			background-color: #fff;
			color: #222;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php

		include_once "conexao.php";

		$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
		$consulta = $conn->query("SELECT * FROM usuarios where id = '$id'");
		$linha = $consulta->fetch(PDO::FETCH_ASSOC);

		?>
		<form action="editar.php" method="post">
			<div class="mb-3">
				<label for="nome" class="form-label">Nome:</label>
				<input type="text" name="nome" class="form-control" id="nome" value="<?php echo $linha['nome'] ?>">
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email:</label>
				<input type="text" name="email" class="form-control" id="email" value="<?php echo $linha['email'] ?>">
			</div>
			<div class="mb-3">
				<label for="senha" class="form-label">Senha:</label>
				<input type="text" name="senha" class="form-control" id="senha" value="<?php echo $linha['senha'] ?>">
			</div>
			<input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
			<input type="submit" value="Editar" class="btn btn-primary">
		</form>
	</div>
	<!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
