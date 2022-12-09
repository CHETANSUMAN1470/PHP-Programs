<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Percentage Porject By If Else</title>
</head>
<body>
	<?php

	$x = 50;
	if($x>=90 && $x<=100) {
		echo "In merit";
	}
	elseif($x>=60 && $x<90) {
		echo "First Division";
	}
	elseif($x>=45 && $x<60) {
		echo "Second Division";
	}
	elseif($x>=33 && $x<45){
        echo "Third Division";
	}
	elseif($x>=0 && $x<33){
        echo "You are Fail.";
	}
	else{
		echo "Please Enter Valid Number.";
	}
	
	?>

</body>
</html>