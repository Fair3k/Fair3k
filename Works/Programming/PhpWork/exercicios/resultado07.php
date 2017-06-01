<div align = "center">
<meta charset="UTF-8">
<body>
<?php
	$num = $_GET["num"];

	if($num > 0){
		echo "NUMERO É POSITIVO!<br>";
	}
	else if($num < 0){
		echo "NUMERO É NEGATIVO!<br>";
	}
	else{
		echo "NUMERO É NULO!<br>";
	}


?>
<br><a href="formulario07.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</body>
</div>
