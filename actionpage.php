<?php 

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$op = $_GET["op"];

if (is_numeric($num1) && is_numeric($num2)) {
	if ($op == "add") {
		$sum = $num1 + $num2;
		$answer = "$num1 + $num2  = $sum";
	} else if ($op == "subtract") {
		$diff = $num1 - $num2;
		$answer = "$num1 - $num2 = $diff";
	} else if ($op == "multiply") {
		$product = $num1 * $num2;
		$answer = "$num1 * $num2 = $product";
	} else if ($num2 == 0 && $op == "divide") {
		$answer = "You can't divide by zero. Please try another pair of numbers.";
	} else if ($op == "divide") {
		$dividend = $num1 / $num2;
		$answer = "$num1 &#247 $num2 = $dividend";
	} else {
		$answer = "Oops. Looks like we missed something.";
	}
} else {
	$answer = "Looks like one you entered something that isn't a number. Please try again.";
}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>Your Answer</title>
 	</head>
 	<body>
 		
 		<?php echo $answer ?>

 		Want to do more math? <a href="index.php">Go Back</a>
 	
 	</body>
</html>