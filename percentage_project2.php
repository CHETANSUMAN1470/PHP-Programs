<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Percentage Project By Switch</title>
</head>
<body>
	<?php

	$x = 33;
	switch ($x) {
		case ($x>=90 && $x<=100):
			echo "in merit";
			break;

		case ($x>=60 && $x<90):
			echo "First Division";
			break;

		case ($x>=45 && $x<60):
			echo "Second Division";
			break;
			
		case ($x>=33 && $x<45):
			echo "Third Division";
			break;

		case ($x>=0 && $x<33):
			echo "You are Fail";
			break;		
		
		default:
			echo "Please enter valid input.";
	}
	
	?>

</body>
</html>