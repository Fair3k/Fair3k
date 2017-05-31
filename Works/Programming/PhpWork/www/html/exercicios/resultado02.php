<div align = "center">
<meta charset="UTF-8">
<body>
<?php

	$can1 = $_GET["can1"];
	$can2 = $_GET["can2"];
	$branco	= $_GET["branco"];
	$nulo = $_GET["nulo"];

	$soma = $can1 + $can2 + $nulo + $branco;
	$can1 = $can1 * 100 / $soma;
	$can2 = $can2 * 100 / $soma;
	$branco = $branco * 100 / $soma;
	$nulo = $nulo * 100 / $soma;

	$can1 = number_format($can1, 2, ",", ".");
	$can2 = number_format($can2, 2, ",", ".");
	$branco = number_format($branco, 2, ",", ".");
	$nulo = number_format($nulo, 2, ",", ".");

		echo "Candidato 1: " . $can1 . "%<br>";
		echo "Candidato 2: " . $can2 . "%<br>";
		echo "Votos Nulos: " . $nulo . "%<br>";
		echo "Votos Brancos: " . $branco . "%<br>";

?>
<br><a href="formulario02.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</body>
</div>
