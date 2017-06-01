<html>
	<head>
		<title>Maior Número</title>
		<meta charset="UTF-8"/>
	</head>

<body>
<?php
	$num1 = $_GET["num1"];
	$num2 = $_GET["num2"];
  $num3 = $_GET["num3"];

  if($num1 >= $num2 && $num1 >= $num3){
    $maior = $num1;
  }
  else if($num2 >= $num1 && $num2 >= $num3){
    $maior = $num2;
  }
  else if($num3 >= $num1 && $num3 >= $num2){
    $maior = $num3;
  }

  echo "Maior numero: " .$maior;
?>
<br><a href="formulario11.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
</body>
