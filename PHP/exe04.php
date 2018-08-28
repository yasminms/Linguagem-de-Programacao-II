<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício 4</title>
	<style type="text/css">
		div {
			background-color: gray;
			width: 400px;
			padding: 10px 0px;
			text-align: center;
			margin: 0 auto;
			color: white;
			font-weight: bold;
		} 
		
		p:first-child {
			padding-top: 10px;
			border-top: 1px solid white;
		}

		p {
			color: white;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php
	$n = $_POST['numero'];
	printf("<div>TABUADA DO %d<p>", $n);
	for ($i = 0; $i < 11; $i++) {
		printf("%d X %d = %d<br>", $n, $i, $i*$n);
	}
	printf("</p></div>")
	?>

</body>
</html>