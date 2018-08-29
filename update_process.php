<?php
	$con = mysqli_connect("localhost","root","","project");
	
	if($_POST){	
		$id 	= $_POST['id'];
		$name 	= $_POST['name'];
		$add 	= $_POST['add'];
		$bg 	= $_POST['bg'];
		$dob 	= $_POST['dob'];
		$phone 	= $_POST['ph'];
		$email 	= $_POST['em'];
		$password 	= $_POST['password'];
		
		mysqli_query($con,
		"UPDATE `student_info` SET `s_name`='$name',`s_add`='$add',`s_bg`='$bg ',`dob`='$dob',`s_ph`='$phone',`email`='$email',`pass`='$password' WHERE `s_id` ='$id'
		");	
		
		header('location:admin_std.php');
		
	}
	else{
		echo "There is an error!!!";
	}
?>