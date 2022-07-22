<?php

$java=50;
$php=70;
$python=60;
$android=40;
$c=70;

$total=$java+$php+$python+$android;
echo "Total marks is :".$total."<br>";

$per=($total*100)/500;
echo "per is :".$per."<br>";

if($per>=65)
{
	echo "class is district".$per;
}
elseif($per>=50 && $per<60)
{
	echo "class is first".$per;
}
elseif($per>=40 && $per<50)
{
	echo "class is second".$per;
}
else
{
	echo "you are fail".$per;
}
	







?>