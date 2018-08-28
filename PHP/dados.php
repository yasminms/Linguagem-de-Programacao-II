<form method="POST">
	<h1>Dados</h1>
		<label>Nome</label>
		<input type="text" name="nome" maxlength="40"><br>
		<label>Ano que começou a trabalhar</label>
		<input type="text" name="anotrabalho" maxlength="4" size="4"><br>
		<label>Altura</label>
		<input type="text" name="altura" maxlength="4" size="4"><br><br>
		<label>Idiomas</label><br>
		<input type="checkbox" name="idioma[0]" value="Inglês">Inglês
		<input type="checkbox" name="idioma[1]" value="Espanhol">Espanhol
		<input type="checkbox" name="idioma[2]" value="Português">Português<br><br>
		<label>Hobbies</label><br>
		<input type="checkbox" name="hobby[0]" value="Música">Música
		<input type="checkbox" name="hobby[1]" value="Pintura">Pintura
		<input type="checkbox" name="hobby[2]" value="Esporte">Esporte
		<br><br>
		<input type="submit" name="enviar" value="Enviar">
</form>
<?php

	if (isset($_POST['nome']) and isset($_POST['anotrabalho']) and isset($_POST['altura'])) {
		echo "<br>";
		echo "Nome: ".$_POST['nome']."<br>";
		echo "Ano trabalho: ".$_POST['anotrabalho']."<br>";
		echo "Altura: ".$_POST['altura']."m"."<br>";
		echo "Idiomas: ";
		foreach ($_POST['idioma'] as  $v) {
			echo"$v ";
		}
		echo "<br>";
		echo "Hobbies: ";
		foreach ($_POST['hobby'] as  $v) {
			echo"$v ";
		}



		//$_POST['idioma']."m"."<br>";
	}
 ?>