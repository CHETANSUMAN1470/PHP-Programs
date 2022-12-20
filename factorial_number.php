<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factorial number program</title>
</head>
<body>
	<?php 
	
	$factor = 1;
	$x = 6;
	for ($i=6; $i >= 1; $i--) { 
		$factor = $factor * $i;
	}
        echo "Factorial of $x is $factor";

	?>

</body>
</html>