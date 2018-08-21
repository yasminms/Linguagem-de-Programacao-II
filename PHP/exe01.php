<!DOCTYPE html>
<html>
<head>
	<title></title>
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

		$qtde = $_POST['qtde'];
		$nome = $_POST['nome'];

		echo "<div><p>Aviso ao representante $nome </p><p>A Equpe com $qtde alunos foi aceita!</p></div>";
	?>

</body>
</html>