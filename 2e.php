<?php
function calcula($a,$b){
$r=null;
 $r=$r."suma:" .$a."+".$b."=".($a+$b). '</br>';
 $r=$r."resta:" .$a."-".$b."=".($a-$b). '</br>';
if($b!=0) $r=$r."division:" .$b."/".$a."=".($b/$a). '</br>';
 $r=$r."multiplicacion:" .$a."x".$b."=".($a*$b). '</br>';
return $r;
}
$r=calcula(10,5);
echo $r;
$r=calcula(420,69);
echo $r;
?>