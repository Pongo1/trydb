<?php 

session_start();
if (isset($_POST['signInButton'])){

$userName= $_POST['nameBox'];
$passWord= $_POST['passWordBox'];

$query = "SELECT * FROM accounts WHERE Username='$userName' AND Password ='$passWord'"; 

//connect to database 
$connection = mysqli_connect('localhost','root','','people'); 
mysqli_select_db($connection,'people'); 

$searchResults = mysqli_query($connection,$query);


$row = mysqli_fetch_array($searchResults); 

if ($row['Username']==$userName && $row['Password']==$passWord){
	$_SESSION['theName'] = $row['Username'];
	//echo '<h2>Welcome '.$row['Username'].'</h2>';
	//header("Location: userPage.html");
	echo "Welcome ".$row['Username'];


}else {
	echo "Invalid userName or password";
}

}








?>