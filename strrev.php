<?php

if (isset($_POST['submit'])) {
  echo getrevstr($_POST['str']);
}
/*it is a custom Function i.e it is created by ownself rathere than using the inbuilt fn of php like strrev()*/
 function getrevstr($str){
 	  
  $strrev="";
  $count = strlen($str)-1;
  echo " Enter a String or Number";
  echo "</br>";
 for ($i=$count; $i >=0 ; $i--) { 
 		$strrev.=$str[$i];
}
	echo $strrev;
 }
?>
<form method="post">
	<input type="textbox" name="str" required>
	<input type="submit" name="submit" required>
	
</form>