<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		$soma = $_POST['nota1'] + $_POST['nota2'] + $_POST['nota3'] + $_POST['nota4'];
		$media = $soma/4;
		$situacao = "";

		if ($media >= 7) {
			$situacao = "Aprovado";
		} else {
			$situacao = "Reprovado";
		}

		echo "Média das notas: $media<br>Situação: $situacao";
	?>

</body>
</html>