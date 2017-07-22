<!DOCTYPE html>

<html>

	<body>

		<?php

			$x = $_POST["number"];

			function factorial($x){
				if ($x == 0 || $x == 1)
					return 1;
				else
					return $x * factorial($x - 1);
			}

			$output = factorial($x);

			echo $x."! = ".$output;

			$stringX = (string) $x;
			$stringOutput = (string) $output;

			$session = array($stringX, $stringOutput, "145150407111012", "Restu Pambudi");

			session_start();
			$_SESSION["session"] = $session;
		?>
		
		<br>
		
		<a href="Lat3_3c.php">Next</a>

	</body>

</html>
