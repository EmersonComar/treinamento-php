<?php

function verificaNumero($valor){
	if ($valor > 0){
		echo "Positivo" .PHP_EOL;
	} else if ($valor == 0){
		echo "Zero" .PHP_EOL;
	}else{
		echo "Negativo" .PHP_EOL;
	}
}

verificaNumero(-5);
verificaNumero(0);
verificaNumero(7);


?>
