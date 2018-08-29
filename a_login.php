<?php
    session_start();
    error_reporting(0);
    $con = mysqli_connect("localhost","root","","project");
    if($_SESSION['logged_in'] == 'yes'){
        header('location:adminpro.php');
    }   
    
    if(!isset($_SESSION['logged_in'])){
        $_SESSION['logged_in'] = 'no';
    }
    
    if($_POST){
        $admin_name = $_POST['aname'];
        $password = $_POST['apass'];
        
        $result = mysqli_query($con, "SELECT * FROM admin WHERE name = '$admin_name' AND password = '$password'");
        while($row = mysqli_fetch_array($result)){
            $_SESSION['logged_in'] = 'yes';
            $_SESSION['aid'] = $row['a_id'];
            header('location:adminpro.php');
        }
    }

?>
<?php
    include 'header.php';
?>
<?php
    include 'sidebar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="lg.css">
</head>
<body>
    <div class="col-md-6">
        <span href="#" class="button" id="toggle-login">Log in</span>

        <div id="login">
            <div id="triangle">
            </div>
                <h1>
                    Log in
                </h1>
                      <form action="" method="POST" >
                        <input type="text" placeholder="Username" name="aname" />
                        <input type="password" placeholder="Password" name="apass" />
                        <input type="submit" value="Log in" />
                      </form>
        </div>
    </div>
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
    <script type="text/javascript" src="lgjs.js"></script>
</body>
</html>
<?php
    include 'sidebar2.php';
?>
<?php
    include 'footer.php';
?>
