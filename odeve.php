<?php
$even="";
$odd="";

if (isset($_POST['submit']))
{
	$n = $_POST['number'];
	for ($i=1; $i <=$n ; $i++) 
 {  
		if ($i%2==0)
  	{
		$even.=$i.",";

    }		else
  	  {
			$odd.=$i.",";
	  }
	  
 }
 	$even=rtrim($even,",");
	  $odd=rtrim($odd,",");
	  echo "even :".$even;
	  echo "</br>";
	  echo "odd :".$odd;

}
?>
<form method="post">
	<input type="text" name="number" required/>
	<input type="submit" name="submit"/>
	
</form>