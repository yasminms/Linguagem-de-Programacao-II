<!DOCTYPE html>
<html>
<head>
	<title>Exercício 3</title>
	<style type="text/css">
		div {
			background-color: gray;
			width: 400px;
			padding: 10px 0px;
			text-align: center;
			margin: 0 auto;
		} 
		
		p:first-child {
			padding-top: 10px;
			border-top: 1px solid white;
		}

		p {
			color: white;
			font-weight: bold;
		}
	</style>
</head>
<body>

	<?php
		$salario = $_POST['salario'];
		$reajuste = 0;	
		$percentual = 0;
		if ($salario <= 300) {
			$percentual = 50;
			$reajuste = $salario + (($salario * $percentual)/100);
		} else {
			$percentual = 30;
			$reajuste = $salario + (($salario * $percentual)/100);
		}
		printf ("<div><p>Percentual de reajuste: %d%% <br>Salário reajustado: R$	%.2f</p></div>", $percentual, $reajuste) ;
	?>

</body>
</html>