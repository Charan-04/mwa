<?php
		if(isset($_POST['submit'])){
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operator = $_POST['operator'];

			switch($operator){
				case "+":
					$result = $num1 + $num2;
					break;
				case "-":
					$result = $num1 - $num2;
					break;
				case "*":
					$result = $num1 * $num2;
					break;
				case "/":
					if($num2 == 0){
						echo "Error: Division by zero";
					} else {
						$result = $num1 / $num2;
					}
					break;
				default:
					echo "Invalid operator";
			}

			if(isset($result)){
				echo "<br><br>";
				echo "Result: $result";
			}
		}
	?>