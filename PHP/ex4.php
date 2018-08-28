<form method="post">
	<label>Estação:</label>
	<input type="text" name="estacao"><br><br>
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
		$estacao = $_POST['estacao'];
		$cor = $_POST['opcao'];
		if ($estacao == 'primavera') {
			printf("<font color = '$cor'>Estação das flores!!</font>");
		} elseif ($estacao == 'verão') {
			printf("<font color = '$cor'>Estação do calor!!</font>");
		} elseif ($estacao == 'inverno') {
			printf("<font color = '$cor'>Estação do frio!!</font>");
		} elseif ($estacao == 'outono') {
			printf("<font color = '$cor'>Simplesmente outono!!</font>");
		} 
	}
?>

