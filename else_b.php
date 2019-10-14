<?php
function nota($a){
	$r='Pendiente';
	if ($a>=5){
	$r='Aprobado';
	}
	if($a>=7){
	$r='notable';
	}
	if($a>=10)
	$r='Sobresaliente';
	
	return $r;
}
echo '7'.'='.nota (7).'<br>';
echo '3'.'='.nota(3).'<br>';
echo '10'.'='.nota(10);