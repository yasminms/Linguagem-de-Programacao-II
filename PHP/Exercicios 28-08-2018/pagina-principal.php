<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página principal</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div id="tudo">
		<div id="cabecalho">Lista de exercícios</div>
		<div id="menu">
			<ul>
				<li><a href="pagina-principal.php?n=1">Número 1</a></li>
				<li><a href="?n=2">Número 2</a></li>
				<li><a href="?n=3">Número 3</a></li>
				<li><a href="?n=4">Número 4</a></li>
			</ul>
		</div>
		<div id="conteudo">
		<?php 
			$valor =isset($_GET['n'])? $_GET['n'] : null;
			//echo $valor;
			switch ($valor) {
				case 1: include("exer1.php");
					break;
				
				case 2: include("exer2.php");
					break;

				case 3: include("exer3.php");
					break;
				case 4: include("exer4.php");
					break;
			}			
		?></div>
		<div id="rodape">Rodapé</div>

	</div>

</body>
</html>