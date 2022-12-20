<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sum of digits</title>
</head>
<body>
	<?php
	$x = "407";
	$y = 0;
	for ($i=0; $i < strlen($x) ; $i++) { 
	    $y = $y + $x[$i];
	}
	    echo $y;
	?>
	<?php
	$x = 8078654959;
	$total = 0;
	while ($x != 0) {
		$rem = $x%10;
		$total = $total + $rem;
		$x = $x/10;
	}
        echo $total;
	?>

	<?php
	echo "<hr>";
	$x = "407";
	$y = 0;
	for ($i=0; $i < strlen($x); $i++) { 
		$y = $y + pow($x[$i],3);
	}
	    echo $y;
	?>

	<?php 
	echo "<hr>";
	$count = 0;
    for ($i=1; $i <= 100; $i++) { 
    $x = 0;
    if ($i == 1) {
    	continue;
    }
    	for ($j=2; $j <= $i/2; $j++) { 
    		if ($i % $j == 0 ) {
    			$x++;
    			break;
    		}
    	}
    	if ($x == 0) {
    		echo $i;
    		$count++;
    		echo "<br>";
    		
    	}
    }
    echo "this is total no. :-".$count;

    

    ?>
    

</body>
</html>