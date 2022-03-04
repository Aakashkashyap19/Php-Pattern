<?php	
$n=5;
for($i=1; $i<=$n; $i++){
	for ($j=1; $j<=$n ; $j++) { 
		if ($j==1 || $j==$n) {
			echo"*";
		}else{
			if ($i==1 || $i==$n) {
				echo "*";
			}
			else{
				echo "&nbsp&nbsp";
			}
		}
		
	}
	
	echo"<br/>";
}
?>