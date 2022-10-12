<html>
	<body>
		<?php
			//Equality
			$a = "1";
			$b = "0";
			$bank_balance = "99";
			
			if($a != $b) echo "1";
			if($a !== $b) echo "2";
			echo "<br><br>";
			//Comparison Operators
			
			if($a > $b) echo "a is greater than b <br>";
			if($a < $b) echo "a is less than b <br>";
			if($a >= $b) echo "a is greater than or equal to b <br>";
			if($a <= $b) echo "a is less than or equal to b <br>";
			
			//Logical Operators
			echo $a AND $b. "<br>";
			echo $a or $b. "<br>";
			echo $a XOR $b. "<br>";
			echo !$a		. "<br>";
			
			//If statement
			$bank_balance = 99;
			if($bank_balance<100)
			{
				$money = 1000;
				$bank_balance+=$money;
				echo $bank_balance;
			}

			//Grade_System
			echo "<br><br>";
			$name = "Marquez";
			$grade = 95;
			if ($grade >= 70) 
			{
				echo "Name: ".$name . "<br>Grade: ". $grade . ", you PASSED <br>";
			} 
			elseif (($grade >=60) && ($grade <=69))
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", get REMEDIAL <br>";
			}
			else
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", you FAILED <br>";
			}
		?>
	</body>
</html>