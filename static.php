<?php
function myfunc()
{
	static $x=0;
	echo $x;
	$x++;
}
myfunc();
myfunc();
myfunc();
?>