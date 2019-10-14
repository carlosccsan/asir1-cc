<?php
function nota($a){
	if ($a<5){
	$r='no apto';
	}
	else{ 
	$r='apto';
	}
	return $r;
}
echo '7'.'='.nota (7).'<br>';
echo '3'.'='.nota(3);
?>