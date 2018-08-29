<!DOCTYPE html>
<?php
    $con=mysqli_connect("localhost","root","","project");
    if($_POST){
        $nm=$_POST['name'];
        $em=$_POST['em'];
        $ph=$_POST['ph'];
        $msg=$_POST['msg'];
        mysqli_query($con,"INSERT INTO `contact` ( `name`, `email`, `ph`, `msg`) VALUES ( '$nm', '$em', '$ph', '$msg')"); 
    }
?>
<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
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
                    <h1 class="heading-title pull-left">Contact Us</small></h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Contact</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">     
                    <div class="row page-row">
	                    <div class="col-md-12">                           
                            <h3 class="title">Get in touch</h3>
                            <p>If any information needed. Please contact with us.We  would love to hear from you  </p>
                            <form action="" method="POST">
                                <div class="form-group name">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter your name"name="name">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Email<span class="required"></span></label>
                                    <input id="email" type="email" class="form-control" placeholder="Enter your email" name="em">
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="tel" class="form-control" placeholder="Enter your contact number"name="ph">
                                </div><!--//form-group-->
                                <div class="form-group message">
                                    <label for="message">Message<span class="required"></span></label>
                                    <textarea id="message" class="form-control" rows="6" placeholder="Enter your message here..."name="msg"></textarea>
                                </div><!--//form-group-->
                                <button type="submit" class="btn btn-theme">Send message</button>
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