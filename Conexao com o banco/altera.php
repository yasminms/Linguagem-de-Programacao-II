<!DOCTYPE html>
<html>
<head>
	<title>Alterar dados</title>
</head>
<body>
	<h3>Você está alterando dados dos clientes já cadastrados</h3>
	<?php
	include('conexao.php'); 
	$db = mysqli_select_db($conexao, $banco);
	if (isset($_POST['alterar'])) {
		$sql = "update cliente set nome = '".$_POST['nome']."', email = '".$_POST['email']."' ,cidade = '".$_POST['cidade']."' where codigo = '".$_POST['codigo']."'";
		$query = mysqli_query($conexao, $sql);
	}
	$codigo = $_GET['codigo'];
	$sql = "select * from cliente where codigo = '$codigo'";
	$query = mysqli_query($conexao, $sql);

	while ($linha = mysqli_fetch_array($query)) {
		$mostra_nome = $linha['nome'];
		$mostra_email = $linha['email'];
		$mostra_cidade = $linha['cidade'];
	}

	?>
	<form action="" method="post">
		<input type="hidden" name="codigo" value="<?php echo $codigo;?>">
		<label>Nome<input type="text" name="nome" value="<?php echo $mostra_nome;?>"></label>
		<label>E-mail<input type="text" name="email" value="<?php echo $mostra_email;?>"></label>
		<label>Cidade<input type="text" name="cidade" value="<?php echo $mostra_email;?>"></label>
		<input type="submit" name="alterar" value="Alterar">

		
	</form>

</body>
</html>