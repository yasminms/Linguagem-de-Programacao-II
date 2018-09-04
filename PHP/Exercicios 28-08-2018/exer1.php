<!DOCTYPE html>
<html>
<head>
	<title>EXERCÍCIO 1</title>
</head>
<body>
	<form method="post">
		<label>Nome:</label><input type="text" name="nome"><br>
		<label>Ano:</label><input type="text" name="ano"><br>
		<label>Altura:</label><input type="text" name="altura"><br><br>
		<label>Idiomas:</label><br><label>Inglês</label><input type="checkbox" name="idioma1" value="Inglês">
		<label>Francês:</label><input type="checkbox" name="idioma2" value="Francês">
		<label>Alemão:</label><input type="checkbox" name="idioma3" value="Alemão"><br><br>
		<label>Atividades:</label><br> <label>Jogar</label><input type="checkbox" name="atividade[]" value="jogar">
		<label>Ler:</label><input type="checkbox" name="atividade[]" value="ler">
		<label>Estudar:</label><input type="checkbox" name="atividade[]" value="estudar">
		<input type="submit" name="enviar" value="enviar">
	</form>

	<?php
	if (isset($_POST['enviar'])) {
		$nome = $_POST['nome']; echo "Nome: ".$nome."<br>";
		$ano = $_POST['ano']; echo "Ano: ".$ano."<br>";
		$altura = $_POST['altura']; echo $altura."<br>";
		$idioma1 = isset($_POST['idioma1']) ? $_POST['idioma1'] : null; 
		$idioma2 = isset($_POST['idioma2']) ? $_POST['idioma2'] : null; 
		$idioma3 = isset($_POST['idioma3']) ? $_POST['idioma3'] : null; 
		if ($idioma1 != null or $idioma2 != null or $idioma3 != null) {
			echo "Idiomas: <br>";
			if ($idioma1 != null) {
				echo $idioma1."<br>";
			}
			if ($idioma2 != null) {
				echo $idioma2."<br>";
			}
			if ($idioma3 != null) {
				echo $idioma3."<br>";
			}
		}
		$atividade = isset($_POST['atividade']) ? $_POST['atividade'] : null; 
		if ($atividade != null) {
			echo "Atividades: <br>";
			foreach ($atividade as $v) {
				echo $v."<br>";
			}

		}
	}
	?>
</body>
</html>
