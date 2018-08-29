<?php
	session_start();
	$con = mysqli_connect("localhost","root","","project");
	if($_SESSION['logged_in'] == 'yes'){
		header('location:teacher.php');
	}	
	
	if(!isset($_SESSION['logged_in'])){
		$_SESSION['logged_in'] = 'no';
	}
	
	if($_POST){
		$tnm = $_POST['uname'];
		$pass = $_POST['pass'];
		
		$result = mysqli_query($con, "SELECT * FROM teacher_info WHERE t_name = '$tnm' AND pass = '$pass'");
		while($row = mysqli_fetch_array($result)){
			$_SESSION['logged_in'] = 'yes';
			$_SESSION['user'] = $row['t_id'];
			header('location:teacher.php');
		}
	}

?>
<?php
	include 'header.php';
?>
<?php
	include 'sidebar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="lg.css">
</head>
<body>
	<div class="col-md-6">
		<span href="#" class="button" id="toggle-login">Log in</span>

		<div id="login">
	 	 	<div id="triangle">
	 	 	</div>
	  			<h1>
	  				Log in
	  			</h1>
					  <form action="" method="POST" >
					    <input type="text" placeholder="Username" name="uname" />
					    <input type="password" placeholder="Password" name="pass" />
					    <input type="submit" value="Log in" />
					  </form>
		</div>
	</div>
</body>
</html>
<?php
	include 'sidebar2.php';
?>
<?php
	include 'footer.php';
?>
<script type="text/javascript" src="lgjs.js"></script>