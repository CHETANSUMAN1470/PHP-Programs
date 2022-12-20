<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Print table program</title>
</head>
<body>
	<?php
    //Print table using for loop.

    $x = 2;
	for ($i=1; $i <= 10; $i++) { 
		echo $i*$x;
		echo "<br>";
	}
	?>

	<?php
	//Print table using while loop.

	$x = 2;
	$i = 1;
	while ($i <= 10) {
		echo $i*$x;
		echo "<br>";
		$i++;
	}
	?>

</body>
</html>