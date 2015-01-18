<?php 



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Calculator</title>
		<style>
			input:invalid {
				background: red;
				color: white;
				font-weight: bold;
			}
		</style>
	</head>
	
	<body>
	
		<h2>Basic Calculator</h2>

		<form action="actionpage.php" method="GET">
			<p>Number 1</p>
			<input type="text" pattern="[0-9]*\.?[0-9]*" name="num1"></p>
			<p>Number 2</p>
			<input type="text" pattern="[0-9]*\.?[0-9]*" name="num2"></p>
			<p>What would you like to do with these numbers?</p>
			<input type="radio" name="op" value="add" checked>Add
			<input type="radio" name="op" value="subtract">Subtract
			<input type="radio" name="op" value="multiply">Multiply
			<input type="radio" name="op" value="divide">Divide
			<input type="submit">
		</form>	

	</body>
</html>