<?php

	if($_SERVER['REQUEST_METHOD']=="POST")
	{

		define('servername', 'localhost');
		define('username', 'root');
		define('password', '');
		define('dbname', 'rishabh_70');

		$name = $_POST['username'];
		$email = $_POST['email'];

		$conn = mysqli_connect(servername, username, password, dbname);
		if(!$conn)
			echo "Connection error : " .mysqli_connect_error();
		else
		{
			$sql = "select * from employee where Username='$name' and Email='$email'";
			$result = mysqli_query($conn, $sql) or die("FAILED!!".mysql_error());
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if($row['Username']==$name && $row['Email']==$email)
			{
				session_start();
				$_SESSION['user'] = $name;
				echo "<script type='text/javascript'>alert('You Are Logged In to your Account..!!!'); window.location.href='employee_index.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Please Check Credentials or You are Not a Registered Employee Of Organisation..!'); window.location.href='emp.html';</script>";
			}
			session_cache_expire();
			exit();
		}
	}
?>