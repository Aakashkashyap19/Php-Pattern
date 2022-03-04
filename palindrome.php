<?php
if (isset($_POST['submit'])) {
	$n=$_POST['str'];
    $rev=strrev($n);
    if ($n==$rev) {
	echo "$n is Palindrome ";
} else{
	echo "$n not a Palindrome";
}
}

?>
<form method="post">
	<input type="textbox" name="str" required>
	<input type="submit" name="submit" >
</form>