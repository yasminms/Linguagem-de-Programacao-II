<form method="post">
	<label>Frase:</label>
	<input type="text" name="frase"><br><br>
	<label>Selecione uma cor:</label><br>
	<label>Azul<input type="radio" name="opcao" value="blue" checked></label>
	<label>Verde<input type="radio" name="opcao" value="green"></label>
	<label>Amarelo<input type="radio" name="opcao" value="yellow"></label>
	<label>Vermelho<input type="radio" name="opcao" value="red"></label>
	<input type="submit" name="botao" value="botao">
</form>

<?php
	if(isset($_POST['botao'])) {
		$cor;
		$frase = $_POST['frase'];
		$cor = $_POST['opcao'];
		
		printf("<font color = '$cor'>$frase</font>");
		
	}
?>

