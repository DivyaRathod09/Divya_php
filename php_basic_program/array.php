<?php

$name=array("a","b","c","d","e");
print_r($name);//index num sathe print thase

echo "<hr>";

echo $name[3];// koy 1 j value print karavi hoy tyare

echo "<hr>";

foreach($name as $n)
{
	echo $n."<br>";
}
echo "<hr>";
foreach($name as $n)
{
	if($n=="c")
	{
		continue;
	}
	echo $n."<br>";
}

?>