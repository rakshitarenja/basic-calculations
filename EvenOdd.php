<html>
<body>
<form action='' method="GET">
<h1>Program to find the number is Even or Odd</h1><br>
Enter the number:<input type="text" name="n"/><br>
<input type="submit" name="submit" value="find"/>
</form>
</body>
</html>

<?php
if(isset($_GET['submit']))
	{
	$N=$_GET['n'];
	if($N%2==0)
		{
		echo ("Number is Even  :  ".$N);
		}
	else
		{
		echo ("Number is Odd  :  ".$N);
		}
	}
?>
