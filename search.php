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
                    <h1 class="heading-title pull-left"><?php $search_key=$_POST['srch'];?>Search Result For:<?php echo $search_key;?></small></h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Search</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                 <div class="page-content">     
                    <div class="row page-row">
                    	<div class="col-md-12">
                    		<?php
                    			$search_key=$_POST['srch'];
                    			if( strpos($search_key, 'result') > -1){
									echo "<a href='login.php'>Login</a>";
								}
								else if( strpos($search_key, 'home') > -1){
									echo "<a href='index.php'>Home</a>";	
								}
								else if( strpos($search_key, 'cse') > -1){
									echo "<a href='cse.php'>CSE</a>";	
								}	
								else if( strpos($search_key, 'student') > -1){
									echo "<a href='login.php'>Student</a>";	
								}
								else if( strpos($search_key, 'news') > -1){
									echo "<a href='news.php'>News</a>";	
								}
								
								else if( strpos($search_key, 'teacher') > -1){
									echo "<a href='t_login.php'>Teacher</a>";	
								}
								else if( strpos($search_key, 'contact') > -1){
									echo "<a href='contact.php'>Contact</a>";	
								}
                                else if( strpos($search_key, 'event') > -1){
                                    echo "<a href='event.php'>Event</a>";   
                                }
                                else if( strpos($search_key, 'bsc') > -1){
                                    echo "<a href='undergraduate.php'>Undergraduate</a>";   
                                }
                                else if( strpos($search_key, 'about') > -1){
                                    echo "<a href='index.php'>About</a>";   
                                }
                                else if( strpos($search_key, 'admission') > -1){
                                    echo "<a href='admission.php'>Admission</a>";   
                                }
                                else if( strpos($search_key, 'academic') > -1){
                                    echo "<a href='academics.php'>Academic</a>";   
                                }
                                else if( strpos($search_key, 'lab') > -1){
                                    echo "<a href='lab.php'>Lab</a>";   
                                }
                                else if( strpos($search_key, 'library') > -1){
                                    echo "<a href='library.php'>Library</a>";   
                                }
                                else if( strpos($search_key, 'tution fees') > -1){
                                    echo "<a href='tution.php'>Tution fees</a>";   
                                }
                                else if( strpos($search_key, 'faculty') > -1){
                                    echo "<a href='fc.php'>Faculty</a>";   
                                }
                                else if( strpos($search_key, 'history') > -1){
                                    echo "<a href='index.php'>History</a>";   
                                }
                                else if( strpos($search_key, 'department') > -1){
                                    echo "<a href='cse.php'>Department</a>";   
                                }
                                

								else{
    								echo "<h2>No item found</h2>";
								}
                    		?>
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