<meta charset="UTF-8">
<body>
<?php
	$num = $_GET["num"];

	if($num > 10){
		echo "NUMERO É MAIOR QUE 10!<br>";
	}
	else if($num == 10){
		echo "NUMERO É IGUAL A 10!<br>";
	}
	else{
		echo "NUMERO É MENOR QUE 10!<br>";
	}


?>
<br><a href="formulario06.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</body>
</div>
