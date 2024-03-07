<?php

function calculaMedia($valor1, $valor2, $valor3){
	$media = ($valor1 + $valor2 + $valor3)/3;
	return $media;
}

$media = calculaMedia(10, 15, 20);

echo "Média entre 10, 15 e 20: \n" . $media;

?>
