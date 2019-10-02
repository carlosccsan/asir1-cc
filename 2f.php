<?php

$a=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre', 
	'noviembre',
	'diciembre',
];

//echo $a;
echo '<pre>';
print_r($a);
echo '</pre>';

for($i=0;$i<12;$i++)
	echo $a[$i].'<br>';
foreach($a as $mes){
	echo '<pre>';
	echo $mes ;
	echo '</pre>';
}
function mes($i) 
{
$a=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre', 
	'noviembre',
	'diciembre',
];
return $a [$i-1];
}
echo mes (1);


