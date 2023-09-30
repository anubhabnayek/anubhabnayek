<?php

if(!isset($_SESSION['user'])){
    echo"<script> 
    window.location='login';
    </script>
    ";}
    
/*session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{*/?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | User Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header1.php');?>
<!-- MENU SECTION END-->
    

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
					<p><b>1.Computer</b></p>
					<p><b>2.Electronic</b></p>
					<p><b>3.Electrical</b></p>
					<p><b>4.Civil</b></p>
					<p><b>5.Mechanical</b></p>
					<p><b>6.Architecture</b></p>
					<p><b>7.Back to main menu</b></p>


            </div>
        </div>

        
    
      
    <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-9">
                </div>
                <div class="topnav">
    <div class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" name="find" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
  </form>
</div>

</div>

</div>
</div>
</div>
<?php
if(isset($_REQUEST['submit'])){
  $var=$_REQUEST['find'];
  if($var==1){
    echo"<script>
    alert('Add computer book');
    window.location='form?category=computer';
    </script>";
  }
  elseif($var==2){
    echo"<script>
    alert('Add Electronic book');
    window.location='form?category=Electronic';
    </script>";
  }
  elseif($var==3){
    echo"<script>
    alert('Add Electrical book');
    window.location='form?category=Electrical';
    </script>";
  }
  elseif($var==4){
    echo"<script>
    alert('Add Civil book');
    window.location='form?category=Civil';
    </script>";
  }
  elseif($var==5){
    echo"<script>
    alert('Add Mechanical book');
    window.location='form?category=Mechanical';
    </script>";
  }
  elseif($var==6){
    echo"<script>
    alert('Add Architecture book');
    window.location='form?category=Architecture';
    </script>";
  }


}

?>
      
<?php include('includes/footer.php');?>
         
<?php  ?>
