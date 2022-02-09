<html>
<body>
<h1>Storing global variable using array in PHP</h1>

<?php
function test()
{
	local $a, $b, $c;
	$a = 45;
	$b = 45;
	$c = $a + $b;
}

test();
echo "Sum of $a and $b is: $c";
?>
</body>
</html>
