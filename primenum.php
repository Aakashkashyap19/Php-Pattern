<?php
$primenumber='';
if (isset($_POST['submit']))
{
   //echo checkprime($_POST['number']);
	
	for ($i=2; $i<=$_POST['number']; $i++)
	{
		$result=checkprime($i);
		if ($result=="Prime")
		{
			$primenumber.=$i.',';
		}
	}	
	echo $primenumber;	
}
function checkprime($n)
{
$flag=0;
	for ($i=2; $i<$n ; $i++) 
	{ 
		if ($n % $i==0) 
		{
			$flag=1;
			break;
		}
	}
	
	if ($flag==1) 
	{
		return "Not a Prime Number" ;
	}
	else
	{
		return "Prime";
	}
}

?>
<form method="post">
	<input type="text" name="number" required/>
	<input type="submit" name="submit">
</form>