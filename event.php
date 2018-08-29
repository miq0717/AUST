<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
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
                    <h1 class="heading-title pull-left">Events</small></h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">News & Events</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                 <div class="page-content">     
                    <div class="row page-row">
                      <div class="events-wrapper col-md-8 col-sm-7">                         
                            <article class="events-item page-row has-divider clearfix">
                                <div class="date-label-wrapper col-md-1 col-sm-2">
                                  <?php
                                                    $con=mysqli_connect("localhost","root","","project");
                                                    $rslt=mysqli_query($con,"SELECT * from event order by e_id desc");
                                                    while ($row=mysqli_fetch_array($rslt))
                                                    {
                                                ?> 
                                    <p class="date-label">
                                        <span class="month"> 
                                            <?php
                                                    echo $row['month'];
                                            ?>
                                        </span>
                                        <span class="date-number">
                                            <?php
                                                    echo $row['date'];
                                            ?>
                                        </span>
                                    </p>
                                </div><!--//date-label-wrapper-->
                                <div class="details col-md-11 col-sm-10">
                                    <h3 class="title"> 
                                        <?php
                                                echo $row['title'];
                                        ?>
                                    </h3>
                                    <p class="meta">
                                    <span class="time">
                                        <i class="fa fa-clock-o">
                                            <?php
                                                echo $row['time'];
                                            ?>
                                        </i>
                                        </span>
                                    <span class="location">
                                        <i class="fa fa-map-marker"></i>
                                            <?php
                                                    echo $row['loc'];
                                            ?>
                                        </span>
                                    </p>  
                                    <p class="desc">
                                    <?php
                                            echo $row['desc'];
                                    ?>
                                    </p> 
                                    <?php
                                        }
                                    ?>                      
                                </div><!--//details-->
                            </article><!--//events-item-->
                            
                            
                            <ul class="pagination">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                            
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
						
	function result($param1='')
	{
		$page_data['type']='list';
		$this->db->select('*');
        $this->db->from('takes');
        $this->db->join('semester','takes.sem_id=semester.sem_id','inner');
		$this->db->join('student','takes.student_id=student.student_id','inner');
		$this->db->join('subject','takes.subject_id=subject.subject_id','inner');
		$this->db->where('semester.sem_id',$param1);
		$page_data['query']=$this->db->get()->result_array();
		$page_data['page_name']='result';
		$this->load->view('index',$page_data);
	}
	
	

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