<!DOCTYPE>
<html>
<body>
<h1>Dados lidos</h1>
<?php
	echo "Nome: ".$_POST['nome']."<br>"; // br quebra de linha
	echo "Sobrenome: ".$_POST['sobrenome']."<br>";
	echo "Texto: ".$_POST['linhas']."<br>"; //o ponto concatena String com outra
	echo "Estado: ".$_POST['estado']."<br>";
	echo "Esportes: ";
	if (isset($_POST['esporte1'])) 
		echo $_POST['esporte1']."  ";
	if (isset($_POST['esporte2']))
		echo $_POST['esporte2']."  ";
	if (isset($_POST['esporte3']))
		echo $_POST['esporte3'];
	echo "Time: ".$_POST['time']."<br>";
	echo "CI: ".$_POST['ci']."<br>";
	echo "Data Emissao: ".$_POST['data']."<br>";
?>
</body>
</html>