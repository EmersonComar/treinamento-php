<?php

function calculaSalario($salario, $horas_trabalhadas){
	$valor = ($salario * $horas_trabalhas);
	return $valor;

}

$meu_salario = calculaSalario(15, 40);
echo $meu_salario;

?>
