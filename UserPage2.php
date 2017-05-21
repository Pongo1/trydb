<?php


if (isset($_POST['upload'])){
$connect = mysqli_connect("localhost","root","","people");
mysqli_select_db($connect,'people'); 

$location = $_FILES['image']['tmp_name'];
$about = $_POST['aboutBox']; 
echo "$location <br> $about";
/*$theQuery = "INSERT INTO photos (Image,text) VALUES ($location,$about)"; 

if ( mysqli_query($connect,$theQuery)){

echo "<script>alert('Image Saved!!');</script>";


}else 
{


echo "<script>alert('Image could not save!!');</script>";
}
*/

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
