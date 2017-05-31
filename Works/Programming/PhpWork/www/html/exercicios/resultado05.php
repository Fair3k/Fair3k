<div align = "center">
<meta charset="UTF-8">
<body>
<?php
	$f = $_GET["f"];

	$c = ($f - 32) / 1.8;

		$c = number_format($c, 2);
		echo "Temperatura Celsius: ".$c;
		echo "°C <br>";

?>
<br><a href="formulario05.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</body>
</div>
