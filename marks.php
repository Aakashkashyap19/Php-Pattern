<?php
$per=25;
	if ($per >=80 && $per<=100 ) {
		echo "You are in Marit List";
	}elseif ($per >= 80 && $per <= 60) {
		echo "You are in first division";
	}elseif ($per >= 60 && $per <= 40) {
		echo "You are in second division";
	} elseif($per<30){
		echo "you've failed ";
	}else{
		echo "enter valid numbers";
	}

?>