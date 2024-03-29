<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="container bg-white">
		<h1 class="bg-light">Cadastro</h1>
		<form action="cadastrar.php" method="post">
			<div class="mb-3">
				<label for="nome" class="form-label">Nome:</label>
				<input type="text" name="nome" id="nome" class="form-control">
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email:</label>
				<input type="email" name="email" id="email" class="form-control">
			</div>
			<div class="mb-3">
				<label for="senha" class="form-label">Senha:</label>
				<input type="text" name="senha" id="senha" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		 </form>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>