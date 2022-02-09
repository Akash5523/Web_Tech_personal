<html>
<body>
<h1>Static Keyword in PHP</h1>

<?php
function test()
{
	static $x = 0;
	echo $x;
	$x++;
}

test();
test();
test();
?>
</body>
</html>
