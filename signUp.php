<?php

/*if (isset($_POST['theButton'])){
$NAME = $_POST['nameBox'];
	$EMAIL = $_POST['emailBox'];
	$PASSWORD = $_POST['passWordBox'];
	echo "<h3>Succesfully signed up!!</h3>";
}
*/


if (isset($_POST['theButton'])){

	$NAME = $_POST['nameBox'];
	$EMAIL = $_POST['emailBox'];
	$PASSWORD = $_POST['passWordBox'];
	echo '<h3>'.$NAME.'</h3><br>';
	echo '<h3>'.$EMAIL.'</h3><br>';
	echo '<h3>'.$PASSWORD.'</h3><br>';

$ppl = mysqli_connect("localhost","root","","people") or die(mysql_error()); 

mysqli_select_db($ppl,"people"); 

$query = "INSERT INTO accounts (Username,Email,Password) VALUES ('$NAME','$EMAIL','$PASSWORD')";

if(mysqli_query($ppl,$query))
{
echo "<h3>Succesfully signed up!!</h3>";

}

}


?>


