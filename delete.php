<?php
	$con = mysqli_connect("localhost","root","","project");
	$id = $_GET['id'];
	mysqli_query($con,"DELETE FROM `student_info` WHERE s_id = '$id'");
	header('location:admin_std.php');
?>
