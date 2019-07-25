<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="GET"){
$localhost = "localhost";
$username = "root";
$password = "";
$db = "rishabh_70";

$user = $_GET['username'];
$email = $_GET['email'];
$p = $_GET['pass'];
$cp = $_GET['repeat-pass'];

$conn = mysqli_connect($localhost,$username,$password,$db);
if(!$conn)
echo "Connection error : " .mysqli_connect_error();
else{
echo "Connection Established";
$sql = "Insert into login values('$user','$email','$p','$cp')";
if(mysqli_query($conn,$sql)){
echo "Data Inserted";
echo "<br>";
$message = $_SESSION['You Are Registered In'];
if (isset($_SESSION['message']))
{
    echo "$message";
    unset($_SESSION['message']);
}
header('Location: signin.html');
}
else{
echo "Data not inserted";
}
}
}
?>				