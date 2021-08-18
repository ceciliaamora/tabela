<?php
	$linhas = $_POST['linhas'];
	$colunas = $_POST['colunas'];

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
		<div class="container col-6 mt-5">

			<table class="table table-bordered bg-light">
				<?php
				echo "
				<h6 class='text-center'>Tabela de <strong> $linhas linhas x $colunas colunas </strong> criada!</h6>
				"
				?>
		 		<tbody>
		 			<?php 
		 				for($x=1; $x<=$linhas;$x++){ 
		 			?>
					    <tr>
								<?php
									for($y=1; $y<=$colunas;$y++){ 
								?>
						      	<td></td>
						  	<?php
						  		} 
						  	?>
						</tr>
					<?php
						} 
					?>
			  </tbody>
			</table>
		</div>
	</body>
</html>