<div align = "center">
<html>
	<head>
		<title>Quadrado</title>
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
	}else if($n1>$n2){
		for(;$n2<=$n1;$n2++){
			$quadrado=$n2*$n2;
			echo "Quadrado de ".$n2." = ".$quadrado."<br>";
		}
	}
?>
<br><br><a href="formulario24.php"><input type="button" value="Voltar" /></a><br>
<a href="index.php"><input type="button" value="Pagina Inicial" /></a><br>
</div>
</body>
