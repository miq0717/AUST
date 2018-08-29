<?php
	$con = mysqli_connect("localhost","root","","project");
	
	if($_POST){	
		$id 	= $_POST['id'];
		$name 	= $_POST['name'];
		$add 	= $_POST['add'];
		$phone 	= $_POST['ph'];
		$email 	= $_POST['em'];
		$slry 	= $_POST['slry'];
		$password 	= $_POST['password'];
		
		mysqli_query($con,
		"UPDATE `teacher_info` SET `t_name`='$name',`t_add`='$add', `t_ph`='$phone',`t_email`='$email',`t_salary`='$slry ',`pass`='$password' WHERE `t_id` ='$id'
		");	
		
		header('location:admin_teacher.php');
		
	}
	else{
		echo "There is an error!!!";
	}
?>