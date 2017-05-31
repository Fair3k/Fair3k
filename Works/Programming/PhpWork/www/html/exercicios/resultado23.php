<div align = "center">
<html>
	<head>
		<title>Ordem Crescente</title>
		<meta charset="UTF-8"/>
	</head>

<body>
<?php
	$n1=$_GET["n1"];
	$n2=$_GET["n2"];
	if($n2>$n1){
		for(;$n1<=$n2;$n1++){
			$quadrado=$n1*$n1;
			echo "Quadrado de ".$n1." = ".$quadrado."<br>";
		}
	}else{
		echo "Por favor, digite novamente!";
		header("refresh: 2; url='http://localhost:8080/exercicios/formulario23.php'");
	}
?>
<br><br><a href="formulario23.php"><input type="button" value="Voltar" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
</body>
