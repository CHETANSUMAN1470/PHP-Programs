<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leap year program</title>
</head>
<body>
	<?php

	/*$x = 2004;
	if ($x%4 == 0) {
		echo "It is leap year.";
	}else{
		echo "It is not leap year.";
	}

	echo "<hr>";*/
	$year = 2032;  
 
	if(($year % 4 == 0) & ($year % 100 != 0) | ($year % 400 == 0))
	{
		echo "$year is a Leap Year.";    
	}
	 
	else  
	{  
		echo "$year is not a Leap Year.";    
	}

	?>

</body>
</html>