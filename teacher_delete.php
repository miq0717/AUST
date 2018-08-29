<?php
	$con = mysqli_connect("localhost","root","","project");
	$id = $_GET['id'];
	mysqli_query($con,"DELETE FROM `teacher_info` WHERE t_id = '$id'");
	header('location:admin_teacher.php');
?>