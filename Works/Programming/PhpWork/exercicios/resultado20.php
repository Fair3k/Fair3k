<div align = "center">
<html>
	<head>
		<title>Tabuada do numero escolhido</title>
		<meta charset="UTF-8"/>
	</head>

<body>
<?php


  $num = $_GET["num1"];
  $i = 1;

  echo "Ordem:<br>";

    if($num > 1 && $num <= 10){
        while($i <= 10){
          $tab = $i * $num;
          echo  $i. " x " .$num. " = " .$tab. "<br>";
			       $i++;
        }
    }
    else{
      echo "INSIRA UM VALOR 1 - 10!!";
      header("refresh: 2; url='http://localhost:8080/exercicios/formulario20.php'");
    }



?>
<br><br><a href="formulario20.php"><input type="button" value="Voltar" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
</body>
