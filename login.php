<?php
	session_start();
	error_reporting(0);
	$con = mysqli_connect("localhost","root","","project");
	if($_SESSION['logged_in'] == 'yes'){
		header('location:student.php');
	}	
	
	if(!isset($_SESSION['logged_in'])){
		$_SESSION['logged_in'] = 'no';
	}
	
	if($_POST){
		$student_id = $_POST['sid'];
		$password = $_POST['spass'];
		
		$result = mysqli_query($con, "SELECT * FROM student_info WHERE s_id = '$student_id' AND pass = '$password'");
		while($row = mysqli_fetch_array($result)){
			$_SESSION['logged_in'] = 'yes';
			$_SESSION['sid'] = $row['s_id'];
			header('location:student.php');
		}
	}

?>
<?php
	include 'header.php';
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="lg.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
  <link rel="icon" type="icon" href="icon.jpg">
 
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
	<div class="col-md-12">
		<span href="#" class="button" id="toggle-login">Log in</span>

		<div id="login">
	 	 	<div id="triangle">
	 	 	</div>
	  			<h1>
	  				Log in
	  			</h1>
					  <form action="" method="post" >
					    <input type="text" placeholder="Enter Your Student Id" name="sid" />
					    <input type="password" placeholder="Password" name="spass" />
					    <input type="submit" value="Log in" />
					  </form>
		</div>
	</div>
</body>
</html>

    <script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="lgjs.js"></script>