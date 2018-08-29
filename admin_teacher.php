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
                          <table class="table table-hover">
                              <thead>
                                
                                <tr>
                                  <th>
                                    Teacher Id
                                  </th>
                                  <th>
                                    Teacher Name
                                  </th>
                                  <th>
                                    Teacher Address
                                  </th>
                                  <th>
                                    Phone
                                  </th>
                                  <th>
                                    Email
                                  </th>
                                  <th>
                                    Salary
                                  </th>
                                  <th>
                                    Password
                                  </th>
                                  <th>
                                    Edit
                                  </th>
                                  <th>
                                    Delete
                                  </th>
                                </tr>
                              </thead>
                                <?php
                                  $con=mysqli_connect("localhost","root","","project");
                                  $rslt=mysqli_query($con,"SELECT * from teacher_info");
                                  while ($row=mysqli_fetch_array($rslt))
                                    {
                                ?>
                                <tbody>
                                  <tr>
                                    <td>
                                      <?php
                                        echo $row['t_id'];
                                      ?> 
                                    </td>
                                    <td>
                                      <?php
                                        echo $row['t_name'];
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $row['t_add'];
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $row['t_ph'];
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $row['t_email'];
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $row['t_salary'];
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $row['pass'];
                                      ?>
                                    </td>
                                    <td>
                                      <a href="teacher_edit.php?id=<?php echo $row['t_id']; ?>">
                                        Edit
                                      </a>
                                    </td>
                                    <td>
                                      <a onclick="return confirm('do you really want to delete this?')"
                                        href="teacher_delete.php?id=<?php echo $row['t_id']; ?>">
                                        delete
                                      </a>
                                    </td>
                                  </tr>
                                  
                                </tbody>
                                <tr>
                                    <td>
                                      <a href="teacher_insert.php?id=<?php echo $row['t_id']; ?> ">
                                        Insert
                                      </a>
                                    </td>
                                  </tr>
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