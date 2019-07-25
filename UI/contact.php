<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="GET"){
$localhost = "localhost";
$username = "root";
$password = "";
$db = "rishabh_70";

$user = $_GET['username'];
$email = $_GET['email'];
$message = $_GET['message'];

$conn = mysqli_connect($localhost,$username,$password,$db);
if(!$conn)
echo "Connection error : " .mysqli_connect_error();
else
{
	echo "Connection Established";
	$sql = "Insert into contact values('$user','$email','$message')";
	if(mysqli_query($conn,$sql))
	{
		$message = $_SESSION['Your Response is Added...'];
		if (isset($_SESSION['message']))
		{
		    echo "$message";
		    unset($_SESSION['message']);
		}
		header('Location: index.html');
		else{
		echo "Data not inserted";
		}
	}
}
?>				