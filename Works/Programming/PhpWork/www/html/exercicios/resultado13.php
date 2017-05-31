<html>
	<head>
		<title>Preço Combustivel</title>
		<meta charset="UTF-8"/>
	</head>

<body>
<?php
	$comb = $_GET["comb"];
	$quant = $_GET["quant"];

  if($quant <= 20){
    if($comb == 'Gasolina'){

    $quant = $quant * 3.60;
    $aux = $quant * 0.03;
    $preco = $quant - $aux;

    }
    else if($comb == 'Alcool'){

    $quant = $quant * 2.70;
    $aux = $quant * 0.03;
    $preco = $quant - $aux;

    }
  }

  else if($comb == 'Gasolina' && $quant > 20){

    $quant = $quant * 3.60;
    $aux = $quant * 0.06;
    $preco = $quant - $aux;

  }

  else if($comb == 'Alcool' && $quant > 20){

    $quant = $quant * 2.70;
    $aux = $quant * 0.04;
    $preco = $quant - $aux;

  }

  echo "Valor a ser pago: " .$preco. "<br>";
?>
<br><a href="formulario13.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
</body>
