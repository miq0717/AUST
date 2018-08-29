<?php
   session_start();
   if($_SESSION['logged_in']=='no'){
    header('location:login.php');
   }
?>
<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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
                    <h1 class="heading-title pull-left">Admin Panel</small></h1>
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
                    	<ul class="nav nav-tabs">
                                  <li class="active"><a href="adminpro.php">Profile</a></li>
                                  <li><a href="admin_std.php">Student</a></li>
                                  <li><a href="admin_teacher.php">Teacher</a></li>
                                  <li><a href="admin_course.php">Courses</a></li>
                                  <li><a href="admin_take.php">Takes</a></li>
                                  <li><a href="admin_cntct.php">Contact</a></li>
                                  <li><a href="admin_news.php">News</a></li>
                                  <li><a href="admin_events.php">Events</a></li>
                                   <li><a href="a_logout.php">Logout</a></li>

                                </ul>
	                    
                        <div class="col-md-12">
                                        <div class="table-responsive"> 
                                                               <?php
                          $con=mysqli_connect("localhost","root","","project");
                          $id=$_SESSION['aid'];
                          $rslt=mysqli_query($con,"SELECT * from admin Where a_id='$id'");
                          while ($row=mysqli_fetch_array($rslt))
                          {
                        ?>                     
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                          Name
                                                        </th>
                                                        <td>
                                                          <?php
                                                            echo $row['name'];
                                                          ?> 
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <th>
                                                          Address
                                                        </th>
                                                        <td>
                                                          <?php
                                                            echo $row['address'];
                                                          ?> 
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <th>
                                                          Phone
                                                        </th>
                                                        <td>
                                                          <?php
                                                            echo $row['phone'];
                                                          ?> 
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <th>
                                                          Email
                                                        </th>
                                                        <td>
                                                          <?php
                                                            echo $row['email'];
                                                          ?> 
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <th>
                                                          Password
                                                        </th>
                                                        <td>
                                                          <?php
                                                            echo $row['password'];
                                                          ?> 
                                                        </td>
                                                    </tr>
                                                    </tbody>
                              
                                                
                                            </table><!--//table-->
                                            <?php
                                                  }
                                                ?>
                                        </div><!--//table-responsive-->
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