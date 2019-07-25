<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="GET"){
$localhost = "localhost";
$username = "root";
$password = "";
$db = "rishabh_70";

$pick = $_GET['pickup'];
$dest = $_GET['destination'];
$opt = $_GET['option'];
$dt = $_GET['date'];
$tym = $_GET['time'];

$conn = mysqli_connect($localhost,$username,$password,$db);
if(!$conn)
echo "Connection error : " .mysqli_connect_error();
else{
echo "Connection Established";
$sql = "Insert into service values('$pick','$dest','$opt','$dt','$tym')";
if(mysqli_query($conn,$sql)){
$message = $_SESSION['YOU ENTERED YOUR SERVICE PROPERLY...'];
echo "$message";
header('Location: index.html');
}
else{
echo "Data not inserted";
}
}
}
?>    