<?php
/*$a=20;
$b=30;
echo $sum=$a+$b;//code

echo"<hr>";

function sum()
{
	$a=20;
	$b=30;
	echo $sum=$a+$b."<br>";//with function
}
sum();
echo"<hr>";
*/

function sum($name,$a,$b)
{
	echo $name."total:".$a+$b."<br>";//function with argument
}
sum("rajesh",50,30);
sum("harsh",50,40);

?>