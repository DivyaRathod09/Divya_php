<?php
//default argument

function student($name,$country="india")
{
	echo "my nameis:".$name." my county is:".$country."<br>";
}
student("divya");//default india lese
student("divya","caneda");//call karti vakhat ni caneda lese
student("divya",null);//value null j avse

?>