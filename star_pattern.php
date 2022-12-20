<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Start Pattern</title>
	<style type="text/css">
		.container{
			padding: 10px 0;
		}
		.col-lg-2{
			color: black;
			font-size: 20px;
			margin-bottom: 50px;
		}
		h5{
			color: darkred;
		}
		
	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<h5>Start Pattern 1.</h5>
				<?php
				//1.
				for ($a=1; $a <= 5 ; $a++) { 
					for ($b=1; $b <= $a ; $b++) { 
						echo "*&nbsp&nbsp";
					}
					echo "<br>";
				}
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 2.</h5>
				<?php
				for ($a=1; $a <= 5 ; $a++) { 
			    	for ($b=5; $b >= $a ; $b--) { 
			    		echo "*&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 3.</h5>
				<?php
				for ($a=1; $a <= 5; $a++) { 
			    	for ($b=4; $b >= $a; $b--) { 
			    		echo "&nbsp&nbsp&nbsp";
			    	}
			    	for ($c=1; $c <= $a ; $c++) { 
			    		echo "*&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 4.</h5>
				<?php
				for ($a=1; $a <= 5; $a++) { 
			    	for ($b=4; $b >= $a; $b--) { 
			    		echo "&nbsp&nbsp";
			    	}
			    	for ($c=1; $c <= $a ; $c++) { 
			    		echo "*&nbsp&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 5.</h5>
				<?php
				 for ($a=1; $a <= 5; $a++) { 
			    	for ($b=1; $b <= 4; $b++) { 
			    		echo "*&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 6.</h5>
				<?php
				for ($a=1; $a <= 5 ; $a++) { 
			    	for ($b=1; $b <= $a ; $b++) { 
			    		echo $a;
			    		echo "&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>

			<div class="col-lg-2">
				<h5>Start Pattern 7.</h5>
				<?php
				$x = 1;
			    for ($a=1; $a <= 5; $a++) { 
			    	for ($b=1; $b <= $a; $b++) { 
				    	echo $x++;
				    	echo "&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 8.</h5>
				<?php
				for ($a=65; $a <= 69; $a++) { 
			    	for ($b=65; $b <= $a; $b++) { 
			    		echo chr($a);
			    		echo "&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 9.</h5>
				<?php
				for ($a=1; $a <= 5 ; $a++) { 
			    	for ($b=5; $b >= $a ; $b--) { 
			    		echo "*&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 10.</h5>
				<?php
				for ($a=1; $a <= 5; $a++) { 
			    	for ($b=2; $b <= $a; $b++) { 
			    		echo "&nbsp&nbsp";
			    	}
			    	for ($c=5; $c >= $a; $c--) { 
			    		echo "*&nbsp&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 11.</h5>
				<?php
				for ($a=1; $a <= 5; $a++) { 
			    	for ($b=1; $b <= $a; $b++) { 
			    		echo "*&nbsp&nbsp";
			    	}
			        echo "<br>";
			    }
			    for ($c=1; $c <= 4; $c++) { 
			    	for ($d=4; $d >= $c; $d--) { 
			    		echo "*&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 12.</h5>
				<?php
				for ($a=1; $a <=5 ; $a++) { 
			    	for ($b=4; $b >= $a; $b--) { 
			    		echo "&nbsp&nbsp";
			    	}
			    	for ($c=1; $c <= $a; $c++) { 
			    		echo "&nbsp*";
			    	}
			    	echo "<br>";
			    }
			    for ($d=1; $d <= 4 ; $d++) { 
			    	for ($e=1; $e <= $d ; $e++) { 
			    		echo "&nbsp&nbsp";
			    	}
			    	for ($f=4; $f >= $d; $f--) { 
			    		echo "&nbsp*";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 13.</h5>
				<?php
				 for ($a=1; $a <=5 ; $a++) { 
			    	for ($b=4; $b >= $a; $b--) { 
			    		echo "&nbsp&nbsp";
			    	}
			    	for ($c=1; $c <= $a; $c++) { 
			    		echo "*&nbsp&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
			    for ($d=1; $d <= 4 ; $d++) { 
			    	for ($e=1; $e <= $d ; $e++) { 
			    		echo "&nbsp&nbsp";
			    	}
			    	for ($f=4; $f >= $d; $f--) { 
			    		echo "*&nbsp&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 14.</h5>
				<?php
				for ($a=1; $a <= 5; $a++) { 
			    	for ($b=4; $b >= $a; $b--) { 
			    		echo "&nbsp&nbsp";
			    	}
			    	for ($c=1; $c <= $a; $c++) { 
			    		echo $a;
			    		echo "&nbsp&nbsp&nbsp";
			    	}
			    	echo "<br>";
			    }
				?>
			</div>
			<div class="col-lg-2">
				<h5>Start Pattern 15.</h5>
				<?php
				 for ($a=1; $a <= 5; $a++) { 
			    	for ($b=4; $b >= $a; $b--) { 
			    		echo "&nbsp&nbsp";
			    	}
			    	for ($c=1; $c <= $a; $c++) { 
			    		echo chr(64+$c);
			    	}
			    	for ($c=$a-1; $c >= 1; $c--) { 
			    		echo chr(64+$c);
			    	}
			    	echo "<br>";
			    }
				?>
			</div>

		</div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>