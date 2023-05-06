<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuários</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style>
		body {
			color: #333;
			font-family: Arial, sans-serif;
		}
		table.table {
			background-color: #fff;
			color: #333;
		}
		table.table thead {
			background-color: #eee;
			color: #333;
		}
		table.table th,
		table.table td {
			border-color: #ccc;
		}
		table.table td a {
			color: #333;
		}
	</style>
</head>
<body >
	<div class="container">
		<?php
			include_once('conexao.php');
			// Selecionar todos os registros da tabela
			$stmt = $conn->prepare('SELECT * FROM usuarios');
			$stmt->execute();
			$results = $stmt->fetchAll();
			// Exibir os registros na página
			echo '<table class="table table-bordered">';
			echo '<thead><tr><th scope="col">#</th><th scope="col">Nome</th><th scope="col">Email</th><th scope="col">Senha</th><th scope="col">Ações</th></tr></thead>';
			echo '<tbody>';
			foreach ($results as $row) {
				echo '<tr>';
				echo '<th scope="row">' . $row['id'] . '</th>';
				echo '<td>' . $row['nome'] . '</td>';
				echo '<td>' . $row['email'] . '</td>';
				echo '<td>' . $row['senha'] . '</td>';
				echo '<td><a href="formEditar.php?id=' . $row['id'] . '">Editar</a> | <a href="excluir.php?id=' . $row['id'] . '">Excluir</a></td>';
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
			// Fechar a conexão com o banco de dados
			$conn = null;
		?>
		<a href="formCadastro.php" class="btn btn-primary">Cadastrar</a>
	</div>
	<!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	

</body>
</html>
