<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prime Number</title>
</head>
<body>
	<?php 

    //how to know prime no. 
    
	$x = 17;
	$flag = 0;
	for ($i=2; $i < 17 ; $i++) { 
		if ($x % $i == 0) {
			$flag = 1;
		}
	}

	if ($flag == 0) {
		echo $x. " is prime no.";
	}else{
		echo $x. " is not prime no.";
	}

	?>

</body>
</html>