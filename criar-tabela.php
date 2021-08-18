<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
		<div class="wrapper mt-5">

			<form class="login bg-light text-center" action="tabela.php" method="POST">
				<h3 class="text-monospace text-muted">Criar tabela com as dimensões:</h3>

				<label for="linhas">Número de linhas:</label>
				<input type="number" name="linhas" id="linhas" class="m-3"><br>

				<label for="senha">Número de colunas:</label>
				<input type="number" name="colunas" id="colunas" class="m-3"><br>
				<button class="btn btn-primary m-3">Criar</button>
			</form>
		</div>
	</body>
</html>