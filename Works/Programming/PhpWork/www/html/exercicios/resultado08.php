<div align = "center">
<meta charset="UTF-8">
<body>
<?php
	$mac = $_GET["mac"];

	if($mac < 12 && $mac > 0){
		$total = $mac * 1.30;
		echo "Custo total: ". $total . " R$<br>";
	}
	else if($mac >= 12 && $mac > 0){
		$total = $mac * 1.00;
		echo "Custo total: ". $total . " R$<br>";
	}



?>
<br><a href="formulario08.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</body>
</div>
