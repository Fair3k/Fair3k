<div align = "center">
<html>
	<head>
		<title>Salario</title>
		<meta charset="UTF-8"/>
	</head>

<body>
<?php
	$quant = $_GET["Quant"];
	$salhora = $_GET["SalHor"];
  $dep = $_GET["Dep"];

  $salbruto = $quant * $salhora + (50 * $dep);
  $BIR = 0;
  $IR = 0;
  $INSS = 0;
  $salliq = 0;

  if($salbruto > 0 && $salbruto <= 1556.94){
    $INSS = $salbruto * 0.08;
  }
  else if($salbruto > 1556.94 && $salbruto <= 2594.92){
    $INSS = $salbruto * 0.09;
  }
  else if($salbruto > 2594.92 && $salbruto <= 5189.82){
    $INSS = $salbruto * 0.11;
  }
  else if($salbruto > 5189.82){
    $INSS = 570.88;
  }
  else{
    echo "Saldo Invalido!!<br>";
  }

  $BIR = $salbruto - ($dep * 189.59);

  if($dep < 0){
    echo "Numero de Dependentes Invalido!!<br>";
  }

  if($BIR > 0 && $BIR <= 1903.98){
    $IR = $BIR * 0 - 0;
  }
  else if($BIR > 1903.98 && $BIR <= 2826.65){
    $IR = $BIR * 0.075 - 142.80;
  }
  else if($BIR > 2826.65 && $BIR <= 3751.05){
    $IR = $BIR * 0.15 - 354.80;
  }
  else if($BIR > 3751.05 && $BIR <= 4664.68){
    $IR = $BIR * 0.225 - 636.13;
  }
  else if($BIR > 4664.68){
    $IR = $BIR * 0.275 - 869.36;
  }
  else{
    $IR = 0;
  }

  $salliq = $salbruto - $INSS - $IR;

	$salliq = number_format($salliq, 2, ',', '.');
	$salbruto = number_format($salbruto, 2, ',', '.');
	$IR = number_format($IR, 2, ',', '.');
	$INSS = number_format($INSS, 2, ',', '.');
	//NUMBER FORMAT = PORTUGUESE MODE


  if($INSS != 0 && $salbruto != 0 && $salliq != 0){
    echo "Taxa INSS: " .$INSS. " R$<br>Taxa IR: " .$IR. " R$<br>Salario Bruto: " .$salbruto. " R$<br>Salario Liquido: " .$salliq. " R$<br>";
  }
  else{
    echo "Impossivel Calcular...";
  }

?>
<br><a href="formularioextra.php"><input type="button" value="Formulario" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
