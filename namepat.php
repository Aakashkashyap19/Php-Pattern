<?php 
$str="Aakash";
$count=strlen($str); 
 /*for ($i=0; $i < $count ; $i++) {
 	for ($j=0; $j <=$i ; $j++) { 
 	    echo " $str[$i] ";	
 	}
 	
 	echo"<br/>";
 }*/
 for ($i=5; $i >= 0 ; $i--) {
 	for ($j=0; $j <=$i ; $j++) { 
 		echo " $str[$j] "; 	
 	 } 
 	
 	echo"<br/>";
 }
 ?>