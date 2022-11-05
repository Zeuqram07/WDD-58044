<html>
	<head>
		<title>Long Quiz 2</title>
	</head>
	<body>
		<h2>Long Quiz 2 in WDD</h2>
		<p>Problem 1:</p>
		<form method="post">
			<table border="0">
				<tr>
					<td> 
						<input type="text" name="salary" value="" placeholder="Enter salary rate (per day)"/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Submit"/>
					</td>
				</tr>
			</table>
		</form>
	<?php
		//Problem 1
		if(isset($_POST['submit']))
		{
			$salary_rate = $_POST['salary'];
			$salary = 15 * $salary_rate;
			$taxable_amount = 0.30 * $salary;
			$net_pay = $salary - $taxable_amount;

			//output
			echo "Salary Rate: ".$salary_rate." per day <br>";
			echo "Salary: " .$salary."<br>";
			echo "Taxable amount: " .$taxable_amount."<br>";
			echo "Net pay: " .$net_pay."<br><br><br>";
		}
		
		//Problem 2
		echo "Problem 2: <br>";
		$sum = 0;
		for($x=1; $x<=50; $x++)
		{
			$sum +=$x;
		}
		echo "Sum of all integers from 1 to 50 is: ".$sum."<br>";
	?>
	</body>
</html>