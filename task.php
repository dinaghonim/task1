<?php

$bill = 51;


switch($bill)
{
	case ($bill<=50):
		echo("value"." = ". $bill * 3.50 ." "."$");
		break;
		
	case (($bill>50)&&($bill<=150)):
		echo("value"." = ". $bill * 4 ." "."$");
		break;
		
	case ($bill>150):
		echo("value"." = ". $bill * 6.5 ." "."$");
		break;
}


?>
