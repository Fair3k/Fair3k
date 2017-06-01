<html>
	<head>
		<title>Maior Número</title>
		<meta charset="UTF-8"/>
	</head>

<body>
<?php

	$time1 = $_GET["team1"];
	$time2 = $_GET["team2"];
  $quant1 = $_GET["quant1"];
  $quant2 = $_GET["quant2"];

  if($quant1 > $quant2){
    $win = $time1;
  }
  else if($quant2 > $quant1){
    $win = $time2;
  }
  else if($quant1 == $quant2){
    $win = "EMPATE!!";
  }

  echo "Time Vencedor: " .$win. "<br>";
?>
<br><a href="formulario12.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
</body>
