<div align = "center">
<meta charset="UTF-8">
<body>
<?php
	$num1 = $_GET["num1"];
	$num2 = $_GET["num2"];
	$num3 = $_GET["num3"];
	$num4 = $_GET["num4"];

	$soma = $num1 + $num2 + $num3 + $num4;

		echo "Soma: " . $soma . "<br>";

?>
<br><a href="formulario03.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</body>
</div>
