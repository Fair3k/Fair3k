<div align = "center">
<html>
	<head>
		<title>Ordem Crescente</title>
		<meta charset="UTF-8"/>
	</head>

<body>
<?php


	echo "Ordem: <br>";

  for($i = 100; $i >= 50; $i--){
		if($i % 10 == 0){
			echo "<br>";
		}
			echo  $i. " ";
  }


?>
<br><br><a href="formulario22.php"><input type="button" value="Voltar" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
</body>
