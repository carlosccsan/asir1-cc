<?php
echo "<a href='http://192.168.0.84/Asir1-RMH/asir1.php'>Rolando</a>";
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)


?>