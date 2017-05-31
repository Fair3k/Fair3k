<div align = "center">
<meta charset="UTF-8">
<body>
<?php
	$sal = $_GET["sal"];
	$per = $_GET["per"];

	$per2 = $per / 100;
	$rea = $sal * $per2;
	$rea = $rea + $sal;

		$rea = number_format($rea, 2, ",", ".");

		echo "Salario total: " . $rea . " R$<br>";

?>
<br><a href="formulario04.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</body>
</div>
