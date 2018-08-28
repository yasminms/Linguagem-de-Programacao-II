<h1>Par ou Ímpar?</h1>
<form method="POST">
	<input type="number" name="numero">
	<input type="submit" name="enviar" value="Verificar">
</form>
<?php 
	if (isset($_POST['numero']) and isset($_POST['enviar'])) {
		if ($_POST['numero'] % 2 == 0) {
			echo "<h2>Par</h2>";
		} else {
			echo "<h2>Impar</h2>";
		}
	}
 ?>