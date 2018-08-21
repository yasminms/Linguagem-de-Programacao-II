<!DOCTYPE>
<html>
<body>
<h1>Dados lidos</h1>
<?php
	echo "Nome: ".$_GET['nome']."<br>"; // br quebra de linha
	echo "Sobrenome: ".$_GET['sobrenome']."<br>";
	echo "Texto: ".$_GET['linhas']."<br>"; //o ponto concatena String com outra
	echo "Estado: ".$_GET['estado']."<br>";
	echo "Esportes: ".$_GET['esporte1'].", ".$_GET['esporte2'].", ".$_GET['esporte3']."<br>";
	echo "Time: ".$_GET['time']."<br>";
	echo "CI: ".$_GET['ci']."<br>";
	echo "Data Emissao: ".$_GET['data']."<br>";
?>
</body>
</html>