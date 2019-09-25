<?php
echo "<a href='http://192.168.0.50'>Alex </a>";
echo "<a href='http://192.168.0.84/Asir1-RMH/asir1.php'> Rolando </a>";
$f=fopen('visitas.txt','a');
$dates = date ("H:i:s Y-m-d ");
$datos = "la ip es " .$ip." con fecha " .$dates."\r\n";
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)


?>