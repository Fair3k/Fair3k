<html>
	<head>
		<title>Numeros Inteiros</title>
		<meta charset="UTF-8"/>
	</head>

<body>
<?php
  $num = $_GET["num1"];


  $i = 0;

  echo "Ordem:<br>";

  if($num > 0){
    while($i <= $num){
			   echo  $i. " ";
			      $i++;
    }
  }
  else{
    echo "INFORME UM NUMERO MAIOR QUE 0!!!<BR>";
  }


?>
<br><br><a href="formulario17.php"><input type="button" value="Voltar" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
</body>
