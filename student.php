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
	<title>Students corner</title>
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
                    <h1 class="heading-title pull-left">Profile</small></h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Profile</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">     
                    <div class="row page-row">
                    	<ul class="nav nav-tabs">
                                  <li class="active"><a href="student.php" data-toggle="tab">Proflie</a></li>
                                  <li class="nav-item dropdown">
	                           	 	<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Results <i class="fa fa-angle-down"></i></a>
			                            <ul class="dropdown-menu">
			                                <li><a href="frst.html">1st year 1st Semister</a></li>
			                                <li><a href="scnd.html">1st year 2nd Semister</a></li>
			                                <li><a href="thrd.html">2nd year 1st Semister</a></li>
			                                <li><a href="frth.html">2nd year 2nd Semister</a></li>
			                                <li><a href="result.php">3rd year 1st Semister</a></li>
			                                <li><a href="six.html">3rd year 2nd Semister</a></li>
			                                <li><a href="svn.html">4th year 1st Semister</a></li>
			                                <li><a href="eght.html">4th year 2nd Semister</a></li>               
			                            </ul>
                        			</li>
                        			<li>
                        				<a href="logout.php">
                        					Logout
                        				</a>
                        			</li>       
                         </ul>
                        <div class="col-md-12">
                                        <div class="table-responsive">                      
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
																Student Id
															</th>
															<th>
																Student Name
															</th>
															<th>
																Student Address
															</th>
															<th>
																Blood Group
															</th>
															<th>
																Date of Birth
															</th>
															<th>
																Phone
															</th>
															<th>
																Email
															</th>
															<th>
																Password
															</th>
								                       </tr>
                                                </thead>
                                                <?php
													$con=mysqli_connect("localhost","root","","project");
													$id=$_SESSION['sid'];
													$rslt=mysqli_query($con,"SELECT * from student_info Where s_id='$id'");
													while ($row=mysqli_fetch_array($rslt))
													{
												?>
                                                <tbody>
                                                    <tr>
                                                        <td>
								<?php
									echo $row['s_id'];
								?> 
							</td>
							<td>
								<?php
									echo $row['s_name'];
								?>
							</td>
							<td>
								<?php
									echo $row['s_add'];
								?>
							</td>
							<td>
								<?php
									echo $row['s_bg'];
								?>
							</td>
							<td>
								<?php
									echo $row['dob'];
								?>
							</td>
							<td>
								<?php
									echo $row['s_ph'];
								?>
							</td>
							<td>
								<?php
									echo $row['email'];
								?>
							</td>
							<td>
								<?php
									echo $row['pass'];
								?>
							</td>
                                                    </tr>
                                                </tbody>
                                                <?php
                                                	}
                                                ?>
                                            </table><!--//table-->
                                        </div><!--//table-responsive-->
                                    </div>
                        
                    </div><!--//page-row-->
                </div><!--//page-content--> 
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->
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