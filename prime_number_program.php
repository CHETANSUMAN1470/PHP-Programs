<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Find Prime Numbers</title>
</head>
<body>
	<?php
	//how to find prime numbers from 1 to 100.

	for($i = 1; $i <= 100; $i++){
      $m = 0;
      for($j = 2; $j <= $i/2; $j++) {
            if ($i % $j == 0) {
                  $m++;
                  break;
                }
      }
      if ($m == 0) {
                echo "$i <br>";
      }
    }

	?>

</body>
</html>