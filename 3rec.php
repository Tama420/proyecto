<?php
	if (isset($_POST['submit'])) {
		$number = $_POST['number'];
		echo "<h2>multiplicacion por $number:</h2>";
		echo "<table border='1'>";
		for ($i = 1; $i <= 10; $i++) {
			$product = $number * $i;
			echo "<tr><td>$number x $i</td><td>=$product</td></tr>";
		}
		echo "</table>";
	}
	?>