<?php
if(!($_SESSION['user'])){
    echo"<script> 
    window.location='login';
    </script>
    ";
}
?>
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
    <div class="content-wrapper">
         <div class="container">
          <div class="row pad-botm">
            <div class="col-md-12">
                <h4 style="color:blue;" class="header-line">DASHBOARD</h4>
                
             </div>

    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 </div>
					<p><b>1.Add Book</b></p>
					<p><b>2.Delete Book</b></p>
					<p><b>3.Search Book</b></p>
					<p><b>4.View Book List</b></p>
					<p><b>5.Edit Book List</b></p>
					<p><b>6.Change Password</b></p>
					<p><b>7.Close</b></p>
                  </div>
                  </div>
         <div class="container">
             <div class="row">
                <div class="col-md-6 offset-md-9">
                </div>
                <div class="topnav">
         <div class="navbar navbar-light bg-light">
        <form class="form-inline" action="" method="post">
        <input class="form-control mr-sm-2" type="text" name="find" placeholder="Search" aria-label="Search">
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
if($var=="1"){
  echo"<script>
      alert('Add book')
      window.location='index';
      </script>";

}
elseif($var=="2"){
    echo"<script>
    alert('delete book')
    window.location='viewbook?delete_book=true';
    </script>";  
}
elseif($var=="3"){
    echo"<script>
    alert('search book')
    window.location='searchbook?';
    </script>";  
}
elseif($var=="4"){
    echo"<script>
    alert('viewbook')
    window.location='viewbook?';
    </script>";    
}
elseif($var=="5"){
    echo"<script>
    alert('edit a book');
    window.location='viewbook?edit_book=true';
    </script>";    
}

}




?>
      
<?php include('includes/footer.php');?>
         
<?php  ?>
