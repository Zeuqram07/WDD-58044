<html>
	<body>
		<?php
			//Grading_System
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