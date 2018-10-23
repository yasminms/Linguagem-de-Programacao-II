<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<label>Nome
			<input type="text" name="nome">
		</label>
		<label>E-mail
			<input type="email" name="email">
		</label>
		<label>Cidade
			<input type="text" name="cidade">
		</label>
		<label>Foto
			<input type="file" name="foto">
		</label>
		<button type="reset">Limpar</button>
		<input type="submit" name="inserir" value="Inserir">
		<input type="submit" name="mostrar" value="Mostrar">
		<!-- <input name="inserir" type="submit">Inserir</button> -->
	</form>

	<?php 
		$nome=isset($_POST['nome']) ? $_POST['nome'] : null;
		$email=isset($_POST['email']) ? $_POST['email'] : null;
		$cidade=isset($_POST['cidade']) ? $_POST['cidade'] : null;
		$foto=isset($_FILES['foto']['name']) ? $_FILES['foto']['name'] : null;
		include('conexao.php');
		if (isset($_POST['inserir']) && !(empty($_POST['nome']))) {
			$db=mysqli_select_db($conexao,$banco);
			$sql="INSERT INTO cliente VALUES('','$nome','$email','$cidade','$foto')";
			$insere=mysqli_query($conexao,$sql);
			if ($insere==true) {
				echo "Inserido com sucesso!";
				move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/".$_FILES['foto']['name']);
				header("Refresh:0");
			}
		}

		if(isset($_POST['mostrar'])) {
			$db = mysqli_select_db($conexao, $banco);
			$mostra = mysqli_query($conexao, "Select * from cliente order by codigo");
			$num_linhas = mysqli_num_rows($mostra);
			echo "<table border = '1'>
					<tr>
						<td>codigo</td>
						<td>Nome</td>
						<td>E-mail</td>
						<td>Cidade</td>
						<td>Foto</td>
						<td>Alterar</td>
					</tr>";
			for ($i = 0; $i < $num_linhas; $i++) {
				$mostra_tabela = mysqli_fetch_array($mostra);	
				echo "<tr>
						<td>".$mostra_tabela['codigo']."</td>
						<td>".$mostra_tabela['nome']."</td>
						<td>".$mostra_tabela['email']."</td>
						<td>".$mostra_tabela['cidade']."</td>
						<td><img src='uploads/".$mostra_tabela['foto']."' width='100' height='100'></td>
						<td><form action=\"altera.php?codigo=".$mostra_tabela['codigo']."\" method=\"post\"><input type=\"submit\" name=\"Alterar\" value=\"Alterar\"></form></td>
					</tr>";
			}
			echo "</table";
		}
		mysqli_close($conexao);
	 ?>


</body>
</html>