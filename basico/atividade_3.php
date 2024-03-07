<?php

function verificaIntervalo($valor){
	$situacao = "não está";
	if ($valor > 10 && $valor < 25){
		$situacao = "está";
	}
	echo "O valor $valor $situacao no intervalo de 10 e 20" .PHP_EOL;
}

verificaIntervalo(5);
verificaIntervalo(15);
verificaIntervalo(25);

?>
