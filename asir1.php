
<?php
echo '<a href="http://192.168.0.84/asir1-RMH/asir1.php">Página de Rolando</a>';
echo "<br>";
echo "Carlos Campo";
echo "<br>";
echo '<a href="http://192.168.0.191">Página de Alex</a>';
  $archivo="visitas.txt";
  $proceso=fopen($archivo,"a") or die("basura");
  $ip=$_SERVER['REMOTE_ADDR'];
  $hoy = date('Y-m-d H:i:s');
  $datos="La ip es:".$ip." y fecha: ".$hoy."\r\n";
  fwrite($proceso,$datos);
  fclose($proceso);
?>