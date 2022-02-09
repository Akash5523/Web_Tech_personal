<html>
<body>
<h1>User input and print factorial in PHP</h1>

<?php
$num = readline("Enter a number: ");
$fact = 1;
for($i = $num; $i <= $fact; $i--)
{
	$fact = $fact * $i;
}

echo "the factorial of $num is $fact.";
?>
</body>
</html>
