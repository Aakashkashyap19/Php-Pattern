<?php
if (isset($_POST['submit']))
{
  
 $limit = $_POST['number'];
 $n1=0; 
 $n2=1;
 $x=0;
 for ($i=0; $i <$limit ; $i++) 
 { 
	echo $n1;
	$n1=$n1+$n2;
	$n2=$x;
	$x=$n1;
	echo  "<br/>";
 }
}
 ?>
 <form method="post">
<input type="text" name="number" required/> 	
<input type="submit" name="submit"/>
 </form>