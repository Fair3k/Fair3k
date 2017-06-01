<div align = "center">
<html>
	<head>
		<title>Ordem Crescente</title>
		<meta charset="UTF-8"/>
	</head>

<body>
<?php
	$i = 50;
	$j = 1;

  echo "Ordem:<br>";

  while($i <= 100){
		if($i % 10 == 0){
			echo "<br>";
		}
			echo  $i. " ";
			$i++;
			$j++;
  }


?>
<br><br><a href="formulario15.php"><input type="button" value="Voltar" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
</body>
