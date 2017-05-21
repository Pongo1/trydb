<?php


if (isset($_POST['upload'])){
$connect = mysqli_connect("localhost","root","","people");

$location = "UserImages/".basename($_FILES['image']['name']);
$theImage = $_FILES(['image']['name']); 
$about = $_POST['aboutBox']; 
$theQuery = "INSERT INTO addition (Image,text) VALUES ($theImage,$about)"; 

$result = mysqli_query($connect,$theQuery); 
if ( move_uploaded_file($_FILES['name']['tmp_name'], $location)){

	echo "Data has been saved"; 





}
}


?> 
<!DOCTYPE> 
<html>
<title>HomePage</title>
<header>Home</header>
<body> 
<form name='UploadForm' method="post">
<div name = "all" style="border:solid 2px gray; padding:10px; margin:300px; margin-top:100px;">
	<input type="file" name ="image">  <br>
	<div> 
	<textarea name= "aboutBox" cols="48" rows="5" placeholder="Say something about yourself.."></textarea>
	</div><br>
	<input type = "submit" value="upload" name='upload'> 
	</div>
	</form>
</body>
</html>
