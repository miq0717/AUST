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
                    <h1 class="heading-title pull-left">Student</small></h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Stuents Corner</li>
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
												Course Name
											</th>
											<th>
												CT1
											</th>
											<th>
												CT2
											</th>
											<th>
												CT3
											</th>
											<th>
												Avarage
											</th>
											<th>
												Attendence
											</th>
											<th>
												Final Exam
											</th>
											<th>
												Total
											</th>
											<th>
												Grade
											</th>
										</tr>
										   <?php
													$con=mysqli_connect("localhost","root","","project");
													$id=$_SESSION['sid'];
													$rslt=mysqli_query($con,"SELECT student_info.s_id, student_info.s_name, courses.c_name, takes.ct1, takes.ct2, takes.ct3, takes.avg, takes.attendance, takes.final, takes.total, takes.grade
														FROM  `student_info` ,  `courses` ,  `takes` 
														WHERE student_info.s_id='$id' AND
														student_info.s_id = takes.s_id
														AND takes.c_id = courses.c_id");
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
									echo $row['c_name'];
								?>
							</td>
							<td>
								<?php
									echo $row['ct1'];
								?>
							</td>
							<td>
								<?php
									echo $row['ct2'];
								?>
							</td>
							<td>
								<?php
									echo $row['ct3'];
								?>
							</td>
							<td>
								<?php
									echo $row['avg'];
								?>
							</td>
							<td>
								<?php
									echo $row['attendance'];
								?>
							</td>
							<td>
								<?php
									echo $row['final'];
								?>
							</td>
							<td>
								<?php
									echo $row['total'];
								?>
							</td>
							<td>
								<?php
									echo $row['grade'];
								?>
							</td>
                            </tr>
                            </tbody>
                            <?php
                                }
                            ?>
                            </thead>
                           </table>
                          </div>
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