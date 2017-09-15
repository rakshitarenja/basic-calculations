<html>
<body>
<form action='' method="GET">
<h1>Program to find the Year is LeapYear or Not</h1><br>
Enter the year:<input type="text" name="n"/><br>
<input type="submit" name="submit" value="find"/>
</form>
</body>
</html>

<?php
if(isset($_GET['submit']))
	{
	$N=$_GET['n'];
	if($N%4==0)
		{
		echo ("This is LeapYear  :  ".$N);
		}
	else
		{
		echo ("This is NOT a LeapYear  :  ".$N);
		}
	}
?>
