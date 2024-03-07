<?php

function fatorial($valor){

#	$resultado = 1;
#	while ($valor >= 1){
#		$resultado = $resultado * $valor;
#		$valor = $valor - 1;
#	}
#
#	echo "Fatoria: " . $resultado . PHP_EOL;

	if ($valor == 0){
		return 1;
	}

	return $valor * fatorial($valor - 1) ;


}

echo "Digite um valor: ";
$valor = trim(fgets(STDIN));

echo "Fatorial: " . fatorial($valor) . PHP_EOL;

?>
