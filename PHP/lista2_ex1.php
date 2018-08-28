<!DOCTYPE html>
<html>
<head>
	<title>Ex 1</title>
	<meta charset="utf-8">
</head>
<style type="text/css">

* {
	padding: 0;
	margin: 0;
}
	.tmain {
		border: 1px solid black;
		width: 600px;
	}
	.thead {
		width: 100%;
		border-bottom: 1px solid black;
		display: block;
	}
	.tbody_1 {
		float: left;
		width: 100px;
		/*border-right: 1px solid black;*/
	}
	.tbody_2 {
		width: auto;
		display: inline-block;
		height: auto;
		border-left: 1px solid black;
		min-height: 200px;
	}
	.tfooter {
		float: none;
		display: block;
		border-top: 1px solid black;
		width: 100%;
		height: 20px;
	}

	.clear {
		clear: both;
	}

	ul {
		list-style: none;
	}
</style>
<body>
	<div class="tmain">
	<div class="thead">Lista de Exercícios
	</div>
	<div class="tbody_1">
		<ul>
			<li><a href="lista2_ex1.php?n=1">Exercício 1</a></li>
			<li><a href="lista2_ex1.php?n=2">Exercício 2</a></li>
			<li><a href="lista2_ex1.php?n=3">Exercício 3</a></li>
			<li><a href="lista2_ex1.php?n=4">Exercício 4</a></li>
		</ul>
	</div>
	<div class="tbody_2">
	<?php 
		if(isset($_GET['n'])){


			if($_GET['n']==1){
				include("par.php");
			} elseif ($_GET['n']==2) {
				include("dados.php");
			} elseif ($_GET['n']==3) {
				include("ex3.php");
			} elseif ($_GET['n']==4) {
				include("ex4.php");
			}
		}


	?></div>
	<div class="clear"></div>
	<div class="tfooter"></div>
	</div>

</body>
</html>