<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	


	<?php

	$num = 0;
	$par = 0;
	$imp = 0;
	$soma_Par = 0;
	$soma_Imp = 0;

	while ($num<100){
		$num++;

		if($num % 2 == 0){

			$par += 1;
			$soma_Par += $num;

		} else{
			$imp += 1;
			$soma_Imp += $num;

		}
	}

		echo '<br>';
		echo "A quantidade de números é: $num";
		echo '<br/>';

		echo '<br>';
		echo "A quantidade de números pares é: $par ";
		echo '<br/>';

		echo '<br>';
		echo "A quantidade de ímpares é: $imp";
		echo '<br/>';

		echo '<br>';
		echo "A soma dos numeros pares é: $soma_Par";
		echo '<br/>';

		echo '<br>';
		echo "A soma dos números ímpares é: $soma_Imp";
		echo '<br/>';


	?>
</body>
</html>