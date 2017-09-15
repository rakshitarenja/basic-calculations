<html>
<body>
<form action='' method="GET">
<h1>To find the greater number.</h1><br>
Enter the value of A: <input type="text" name="a"/><br>
Enter the value of B: <input type="text" name="b"/><br>
<input type="submit" name="submit" value="find"/>
</form>
</body>
</html>

<?php
if(isset($_GET['submit']))
	{
	$a=$_GET['a'];
	$b=$_GET['b'];
if($a>$b)
	{
	echo ("A is greater number".$a."<br>");
	}
else
	{
	echo ("B is greater number".$b."<br>");
	}
	}
?>
