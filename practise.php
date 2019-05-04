<?php
$a=10;
$b=5;
function myfunc()
{
	global $a,$b;
	$a=$a + $b;
	
}
myfunc();
echo $a;
?>