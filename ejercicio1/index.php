<?php


	function realizarSuma($primerSumando, $segundoSumando){
		return $primerSumando + $segundoSumando;
	}

	function realizarResta($minuendo, $sustraendo){
		return $minuendo - $sustraendo;
	}

	function realizarMultiplicacion($multiplicando, $multiplicador){
		return $multiplicando * $multiplicador;
	}

	function realizarDivision($dividendo, $divisor){
		return $dividendo / $divisor;
	}

	function realizarRaizCuadrada($base){
		return $base * $base;
	}

	$numero1 = $_GET['numero1'];
	$numero2 = $_GET['numero2'];
	$operacion = $_GET['operacion'];

	if($operacion === 'sum') echo "$numero1 + $numero2 = " . realizarSuma($numero1,$numero2);
	if($operacion === 'res') echo "$numero1 - $numero2 = " . realizarResta($numero1,$numero2);
	if($operacion === 'mul') echo "$numero1 x $numero2 = " . realizarMultiplicacion($numero1,$numero2);
	if($operacion === 'div') echo "$numero1 / $numero2 = " . realizarDivision($numero1,$numero2);
	if($operacion === 'cuad') echo "$numero1 ^2 = " . realizarRaizCuadrada($numero1);

