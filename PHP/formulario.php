<!DOCTYPE>
<html>
<head>
	<style>
	
	</style>
</head>
<body>
	<h1>Formulário</h1>
	<form action="processapost.php" method="post">
	<label class="label">Nome:<input type="text" name="nome" placeholder="Digite nome" maxlength="15" size="15">
	<br>
	<label class="label">Sobrenome: <input type="text" name="sobrenome">
	<br>
	<select name="estado">
		<option value="rs">RS</option>
		<option value="sc"  >SC</option>
		<option value="pr" selected>PR</option>
	</select>
	<br>
	<fieldset>
		<legend>Dados pessoais</legend>
		<label>CI:<input type="text" name="ci"><br>
		<label>Data de emissão:<input type="date" name="data"><br>
	</fieldset>
	<label>Texto:<textarea name="linhas" rows="3" cols="50"></textarea>
	<br>
	<input type="checkbox" name="esporte1" value="volei" > Vôlei
	<input type="checkbox" name="esporte2" value="futebol" checked> Futebol
	<input type="checkbox" name="esporte3" value="handebol"> Handebol
	<br>
	<input type="radio" name="time" value="gremio" checked>GREMIO
	<input type="radio" name="time" value="inter">inter
	<input type="radio" name="time" value="outros">outros
	<br>
	<input type="submit" name="enviar" value="enviar">
	<input type="reset" name="reset" value="limpar">
	</form>
</body>
	
</html> 
