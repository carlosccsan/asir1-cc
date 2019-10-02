<?php
for($n=1;$n<11;$n++){
	echo '<div style="
		float:left;
		margin:20px;
		background:pink;
	">';
	for($i=1;$i<=10;$i=$i+1){
		echo $n;
		echo ' * ';
		echo $i;
		echo ' = ';
		echo $n*$i;
		echo '<br/>';
	}
	echo '</div>';
}