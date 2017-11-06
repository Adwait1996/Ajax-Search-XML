<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone ="yes" ?>';

echo "<response>";
	$food=$_GET['food'];
	$foodArray = array('chicken','mutton','biriyani','noodles','coldrinks','icecream','vikram');
	if(in_array($food, $foodArray))
		echo"We do have ".$food."  Congrats!!";
	elseif ($food=="") {
		echo"Enter the food you want to have...";
	}
	else
		echo"Sorry!!..We dont have ".$food."!!";
echo "</response>";
?>