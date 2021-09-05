<?php

$bill = 1000;

if($bill<=50)
{
	echo("value"." = ". $bill * 3.50 ." "."$");
	
}elseif($bill<=150)
{
	echo("value"." = ". $bill * 4 ." "."$");
	
}
elseif($bill>150)
{
	echo("value"." = ". $bill * 6.5 ." "."$");
}



?>