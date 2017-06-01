<div align = "center">
<meta charset="UTF-8">
<body>
<?php
	$n1 = $_GET["n1"];
	$n2 = $_GET["n2"];

	$media = $n1 + $n2;
	$media = $media / 2;

	if($media >= 5){
		echo "Aprovado com: ". $media . "<br>";
	}
	else if($media < 5){
		echo "Reprovado com: ". $media . "<br>";
	}



?>
<br><a href="formulario09.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</body>
</div>
