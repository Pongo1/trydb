<!DOCTYPE>
<html>
	<title>Again</title> 
	<header>Home</header> 

	<body>

		<form method="post">

			<div id="contents" style="border: solid 2px gray; margin:150px; padding:10px; margin-top:50px;">
				<input type="file" id="thefile" name="thefile"><br><br>
				<textarea cols="48" rows="5" name="theBox" placeholder="write something about yourself"></textarea><br><br>
				<input type="submit" value ="Upload" name="upload">
			</div>

		</form>
	</body> 
</html>

<?php

if (isset($_POST['upload'])){
$file = $_FILES['theFile']['tmp_name']; 
$about = $_POST['theBox']; 

echo "$about <br> $file";

}




?>