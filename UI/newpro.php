<?php

	if($_SERVER['REQUEST_METHOD']=="POST"){

	define('servername', 'localhost');
	define('username', 'root');
	define('password', '');
	define('dbname', 'rishabh_70');
	
	//$localhost = "localhost";
	//$username = "root";
	//$password = "";
	//$db = "rishabh_70";
	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$cpassword = $_POST['repeat-pass'];

	$conn = mysqli_connect(servername, username, password, dbname);

	if(!$conn)
	echo "Connection error : " .mysqli_connect_error();
	else{
	$sql = "select * from login where Username='$name' and Email='$email' and Password='$password' and Confirm_Password='$cpassword'";
	$result = mysqli_query($conn, $sql) or die("FAILED!!".mysql_error());
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		if($row['Username']==$name && $row['Password']==$password){
			session_start();
			$_SESSION['user'] = $name;
			echo "<script type='text/javascript'>alert('You Are Logged In..!!!'); window.location.href='commuter_index.html';</script>";
		}
		else
			{
				echo "<script type='text/javascript'>alert('Please Check Credentials..!'); window.location.href='signin.html';</script>";
			}
			exit();
	}
}
?>				