<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<label>Nome<input type="text" name="nome"></label>
		<label>E-mail<input type="text" name="email"></label>
		<label>Cidade<input type="text" name="cidade"></label>
		<label>Foto<input type="file" name="foto"></label>
		<input type="submit" name="incluir" value="Incluir">
		<input type="reset" name="limpar" value="Limpar">
	</form>

	<?php

		$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
		$email = isset($_POST['email']) ? $_POST['email'] : null;
		$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
		$foto = isset($_FILES['foto']['name']) ? $_FILES['foto']['name'] : null;

		include('conexao.php');
		if (isset($_POST['incluir']) && isset($_POST['nome'])) {
			$db = mysqli_select_db($conexao, $banco);
			$sql = "INSERT INTO cliente VALUES ('','$nome', '$email', '$cidade', '$foto')";
			$grava = mysqli_query($conexao, $sql);
			if($grava == true) {
				echo "Cadastro efetuado com sucesso!!";
				move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/".$_FILES['foto']['name']);
			}
		}

		if (isset($_POST['exluir']))

	?>

</body>
</html>