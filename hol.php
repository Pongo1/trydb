<?php

//connect to database 
$connection = mysqli_connect("localhost","root","","other");
mysqli_select_db($connection,'other');

if(isset($_POST['post'])){
$name = $_POST['nameBox'];
$about = $_POST['aboutBox'];
$query = "INSERT INTO Info (Name,About) VALUES ($name , $about)"; 
//results of the query 
if (mysqli_query($connection,$query)or die()){


	echo "Information succesfully saved!";
}else{echo 'Information not succesfully saved!';}


}
?>

<!DOCTYPE> 
<html> 
	<title></title>
	<header></header> 
	<body>
		<form method = "post">
			<div id = "contents" style="border: solid 2px gray; margin:250px; padding:10px; margin-top:50px;"> 
				<label>Name: </label> 
				<input type="text" name="nameBox"/><br><br>
				<textarea cols="48" rows="4" placeholder="Write something about yourself" name="aboutBox"></textarea><br><br> 
				<input type="submit" value="Post" name="post">
			</div>
		</form>
	</body>
</html>