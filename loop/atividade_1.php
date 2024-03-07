<?php

function tabuada($valor){
	for($i = 0; $i <= 10; $i++){
		echo $valor . " x " . $i . " = " . $valor * $i . PHP_EOL;
	}
}


# trim() serve para remover espaços em branco
# fgets() irá receber um valor 
# STDIN entrada padrão

echo "Entre com um valor: ";
$valor = trim(fgets(STDIN));

tabuada($valor);

?>
