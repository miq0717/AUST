<?php
	$con = mysqli_connect("localhost","root","","project");
	$id = $_GET['id'];
	if($_POST){	
		$id 	= $_POST['id'];
		$name 	= $_POST['name'];
		$add 	= $_POST['add'];
		$bg 	= $_POST['bg'];
		$dob 	= $_POST['dob'];
		$phone 	= $_POST['ph'];
		$email 	= $_POST['em'];
		$password 	= $_POST['password'];
	mysqli_query($con,"INSERT INTO `student_info`( `s_name`, `s_add`, `s_bg`, `dob`, `s_ph`, `email`, `pass`) VALUES ('$name','$add','$bg ','$dob','$phone','$email','$password')");
	header('location:admin_std.php');
}
?>
<!DOCTYPE html>

<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
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
	<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Insert Student</small></h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Admin</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">     
                    <div class="row page-row">
	                    <div class="col-md-12">                           
                            <h3 class="title"></h3>
                            <p></p>
                            <form action="" method="POST">
                                <div class="form-group name">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter name"name="name">
                                </div><!--//form-group-->
                                <div class="form-group name">
                                    <label for="name">Address</label>
                                    <input id="name" type="text" class="form-control" placeholder=" Enter Address"name="add">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Blood Group</label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter blood group"name="bg">
                                </div>
                                <div class="form-group name">
                                    <label for="name">Date of Birth</label>
                                    <input id="name" type="date" class="form-control" placeholder="Enter Date of birth"name="dob">
                                </div>
                                
                                <div class="form-group phone">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="tel" class="form-control" placeholder="Enter Phone number"name="ph">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Email<span class="required"></span></label>
                                    <input id="email" type="email" class="form-control" placeholder="Enter email" name="em">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Password<span class="required"></span></label>
                                    <input id="password" type="password" class="form-control" placeholder="Enter new password" name="password">
                                </div><!--//form-group-->
                                <button type="submit" class="btn btn-theme">Submit</button>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </form>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
                                        
<?php
    include 'footer.php';
?>

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
