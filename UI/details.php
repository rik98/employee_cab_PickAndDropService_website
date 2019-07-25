<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Details of Employee</title>
<!--

Template 2081 Solution

http://www.tooplate.com/view/2081-solution

-->
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min1.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- custom -->
		<link rel="stylesheet" href="css/style3.css">

	</head>
	<?php
	session_start();
	$employee = $_SESSION['user'];

	define('servername', 'localhost');
	define('username', 'root');
	define('password', '');
	define('dbname', 'rishabh_70');

	$conn = mysqli_connect(servername, username, password, dbname);
	if(!$conn)
		echo "Connection error : " .mysqli_connect_error();
	else
	{
		$sql = "select * from employee where Username='$employee'";
		$result = mysqli_query($conn, $sql) or die("FAILED!!".mysql_error());
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$email = $row['Email'];
		$start_loc = $row['Start_loc'];
		$end_loc = $row['End_loc'];
		$startdate = $row['Start_date'];
		$enddate = $row['End_date'];
	}
	?>
	<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

		<!-- start navigation -->
		
		<!-- end navigation -->

		<!-- start home -->
		
		<!-- end home -->

		<!-- start service -->
		
		<!-- end service -->

		<!-- start divider -->
		
		<!-- end divider -->

		<!-- start about -->
		
		<!-- end about -->

		<!-- start team -->
		
		<!-- end team -->

		<!-- start newsletter -->
		
		<!-- end newsletter -->

		<!-- start pricing -->

		<!-- end pricing -->

		<!-- start portfolio -->
		<div id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="wow bounce"><?php echo "Employee Name : $employee";?></h2>
							<div class="iso-section wow fadeIn" data-wow-delay="0.6s">

               				 	<div class="iso-box-section">
               				 		<div class="iso-box-wrapper col4-iso-box">

               				 			<div class="iso-box graphic photoshop wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img1.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 				
               				 							<h4>Employee Name</h4>
               				 							<p><?php echo "Employee Name : $employee";?></p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box graphic wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img2.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 				
               				 							<h4>Email Id</h4>
               				 							<p><?php echo "Email Id : $email";?></p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img3.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							
               				 							<h4>Start Location</h4>
               				 							<p><?php echo "Start Location : $start_loc";?></p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box graphic col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img4.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							
               				 							<h4>End Location</h4>
               				 							<p><?php echo "End Location : $end_loc";?></p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img5.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 						
               				 							<h4>Start Date</h4>
               				 							<p><?php echo "Start Date : $startdate";?></p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box graphic photoshop col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img6.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							
               				 							<h4>End Date</h4>
               				 							<p><?php echo "End Date : $enddate";?></p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 		</div>
               				 	</div>

							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end portfolio -->

		<!-- start contact -->
		
		<!-- end contact -->
		
		<!-- start google map -->
		
		<!-- end google map -->

		<!-- start footer -->
		<div>
			<form action="employee_index.php" class="col-md-6 col-sm-4" id="contact-form" role="form">
				<div class="col-md-offset-9 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
					<input name="submit" type="submit" class="form-control" id="submit" value="GO BACK">
				</div>
			</form>
		</div>

		<footer>

		</footer>
		<!-- end footer -->


		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- bootstrap -->
		<script src="js/bootstrap.min1.js"></script>
		<!-- isotope -->
		<script src="js/isotope.js"></script>
		<!-- images loaded -->
   		<script src="js/imagesloaded.min.js"></script>
   		<!-- wow -->
		<script src="js/wow.min.js"></script>
		<!-- smoothScroll -->
		<script src="js/smoothscroll.js"></script>
		<!-- jquery flexslider -->
		<script src="js/jquery.flexslider.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>

	</body>
</html>