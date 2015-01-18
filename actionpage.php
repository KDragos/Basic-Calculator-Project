<?php 

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$op = $_GET["op"];

if (is_numeric($num1) && is_numeric($num2)) {
	if ($op == "add") {
		$sum = $num1 + $num2;
		echo "$num1 + $num2  = $sum";
	} else if ($op == "subtract") {
		$diff = $num1 - $num2;
		echo "$num1 - $num2 = $diff";
	} else if ($op == "multiply") {
		$product = $num1 * $num2;
		echo "$num1 * $num2 = $product";
	} else if ($num2 == 0 && $op == "divide") {
		echo "You can't divide by zero. Please try another pair of numbers.";
	} else if ($op == "divide") {
		$dividend = $num1 / $num2;
		echo "$num1 &#247 $num2 = $dividend";
	} else {
		echo "Oops. Looks like we missed something.";
	}
} else {
	echo "Looks like one you entered something that isn't a number. Please try again.";
}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>Your Answer</title>
 	</head>
 	<body>
 	
 		Want to do more math? <a href="index.php">Go Back</a>
 	
 	</body>
</html>