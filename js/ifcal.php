<html>
<body>
	<form action=iscal.php  method="post">
	number:<input type="number" name="n1" >
	number: <input type="number" name="n2">
	
	op: <input type="textbox" name="op">
	<input type="sumit" value="submit">
	</form>
	
	<?php
		$n1=$_POST["n1"];
		$n2=$_POST["n2"];
		$op=$_POST["op"];
	
	
	
	?>