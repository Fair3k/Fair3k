<body>
<meta charset="UTF-8">
<?php
	$n1 = $_GET["n1"];
	$n2 = $_GET["n2"];

	if($n1 > $n2){
		$n = $n2;
		$n2 = $n1;
		$n1 = $n;
	}

	echo "Ordem: <br>". $n1 . "<br>". $n2 ."<br>";


?>
<br><a href="formulario10.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</body>
</div>
