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
                            <li class="current">News</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                 <div class="page-content">     
                    <div class="row page-row">
                        <div class="news-wrapper col-md-8 col-sm-7">                         
                            <article class="news-item page-row has-divider clearfix row">       
                                <figure class="thumb col-md-2 col-sm-3 col-xs-4">
                                    
                                </figure>
                                <div class="details col-md-10 col-sm-9 col-xs-8">
                                <?php
                                                    $con=mysqli_connect("localhost","root","","project");
                                                    $rslt=mysqli_query($con,"SELECT * from news order by news_id desc");
                                                    while ($row=mysqli_fetch_array($rslt))
                                                    {
                                                ?>
                                    <h3 class="title">
                                    <?php
                                        echo $row['news_title'];
                                    ?>
                                    </h3>
                                    <p>
                                        <?php
                                            echo $row['news'];
                                        ?>
                                    </p>
                                    <?php
                                        }
                                    ?>
                                    
                                </div>
                            </article><!--//news-item-->

                            
                            <ul class="pagination">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                                <li><a href="news1.php">2</a></li>
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