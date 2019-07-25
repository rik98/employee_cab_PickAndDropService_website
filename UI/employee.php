<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="GET"){
$localhost = "localhost";
$username = "root";
$password = "";
$db = "rishabh_70";

$user = $_GET['username'];
$email = $_GET['email'];
$start_loc = $_GET['start'];
$end_loc = $_GET['end'];
$start_date = $_GET['startdate'];
$end_date = $_GET['enddate'];

$conn = mysqli_connect($localhost,$username,$password,$db);

if(!$conn)
	echo "Connection error : " .mysqli_connect_error();

else
{
	echo "Connection Established";
	$sql = "Insert into employee values('$user','$email','$start_loc','$end_loc', '$start_date', '$end_date')";
	if(mysqli_query($conn,$sql))
	{
		echo "<script type='text/javascript'>alert('Your Data For Employee is Recorded, Please Continue to add Data..!'); window.location.href='index.html';</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Data Is Not Recorded Properly..!'); window.location.href='company.html';</script>";
	}
}
}
?>