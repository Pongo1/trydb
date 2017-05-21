<?php


$ppl = mysqli_connect("localhost","root","","people") or die(mysql_error()); 

mysqli_select_db($ppl,"people"); 

$query ="INSERT INTO accounts (Username,Email,Password) VALUES ('eliza','eliza@gmail.com','Walahi')";

mysqli_query($ppl,$query);

?>
