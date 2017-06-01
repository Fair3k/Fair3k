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
    echo "INSIRA UM VALOR MAIOR QUE 0!!";
    header("refresh: 2; url=http://127.0.0.1/exercicios/formulario18.php");
  }


?>
<br><br><a href="formulario18.php"><input type="button" value="Voltar" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
</body>
