<?php

$meses=[
	'1'=>[
		'nombre'=>'enero',
		'dias'=>31,
		'estacion'=>'invierno',		
		],
	'2'=>[
		'nombre'=>'febrero',
		'dias'=>28,
		'estacion'=>'invierno',
	],
	'3'=>[
		'nombre'=>'Marzo',
		'dias'=>31,
		'estacion'=>'Primavera',
	],	
	'4'=>[
		'nombre'=>'Abril',
		'dias'=>30,
		'estacion'=>'Primavera',
	],
	'5'=>[
		'nombre'=>'Mayo',
		'dias'=>31,
		'estacion'=>'Primavera',
	],	
	'6'=>[
		'nombre'=>'Junio',
		'dias'=>30,
		'estacion'=>'Verano',
	],
	'7'=>[
		'nombre'=>'Julio',
		'dias'=>31,
		'estacion'=>'Verano',
	],
	'8'=>[
		'nombre'=>'Agosto',
		'dias'=>31,
		'estacion'=>'Verano',
	],
	'9'=>[
		'nombre'=>'Septiembre',
		'dias'=>30,
		'estacion'=>'Otoño',
	],
	'10'=>[
		'nombre'=>'Octubre',
		'dias'=>31,
		'estacion'=>'Otoño',
	],
	'11'=>[
		'nombre'=>'Noviembre',
		'dias'=>30,
		'estacion'=>'Otoño',
	],
	'12'=>[
		'nombre'=>'Diciembre',
		'dias'=>31,
		'estacion'=>'invierno',
	],
	
];
$dia = 9;


echo $meses [$dia]['nombre'].'<br/>';
echo $meses [$dia]['dias'] .'<br/>';
echo $meses [$dia]['estacion'];


//echo '<pre>';
//print_r($meses);
//echo '</pre>';







?>