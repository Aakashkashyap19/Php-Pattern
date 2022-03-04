<?php
$n=5;
for($i=1; $i<=$n; $i++){
	for($j=1; $j<=$n; $j++){
		if ($j==$i || $j+$i==$n+1 ) {
		echo "*";	
	}
	else {
			echo "0";
		}	
	}
	echo "<br/>";
}
?>
hello
world