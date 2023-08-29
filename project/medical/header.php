<?php 
  function active($currect_page)
  {
	$url_array=explode('/', $_SERVER['REQUEST_URI']) ;
	$url=end($url_array);  
	if($currect_page==$url)
	{
		echo 'active'; //class name in css 
	} 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
<body>


  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Medocare</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <div class="top_contact-container">
          <div class="tel_container">
            <a href="" style="float:left;color:black;">
              <img src="images/telephone-symbol-button.png" alt=""> Call : +01 1234567890
            </a>
            <a href="" style="color:black;text-transform: lowercase;
">
            <!--login email  message show use session-->
              <?php
              if(isset($_SESSION['uid'])){
                echo" /  Welcome...".$_SESSION['name'];
              }
              
              
              ?>
            </a>
          </div>
          <div class="social-container">
            <a href="">
              <img src="images/fb.png" alt="" class="s-1">
            </a>
            <a href="">
              <img src="images/twitter.png" alt="" class="s-2">
            </a>
            <a href="">
              <img src="images/instagram.png" alt="" class="s-3">
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
            <span>
              Medico
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link <?php active('index.php')?>" href="index">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php active('about.php')?>" href="about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php active('medicine.php')?>" href="medicine"> Medical Device </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php active('buy.php')?>" href="buy"> Online Buy </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php active('news.php')?>" href="news"> News </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php active('contact.php')?>" href="contact">Contact us</a>
                </li>
                
              </ul>
              <form class="form-inline ">
                <input type="search" placeholder="Search">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
              <div class="login_btn-contanier ml-0 ml-lg-5">
            <!-- use session login logout-->
                <?php
                if(isset($_SESSION['user'])){
                  ?>
                  <a style="font-size: 12px";  href="profile">
                  <img src="images/profilelogo.jpg" height="25px" weight="25px" alt="">
                  <span>
                    My Account
                  </span>
                </a>
                <br>
                   <a  style="font-size: 12px";  href="logout">
                  <img src="images/profile3.png" height="26px" weight="26px" alt="">
                  <span>
                    Logout
                  </span>
                </a>
                <?php
                }
                else{
                  ?>
                
               
                <a style="font-size: 12px";  href="login">
                  <img src="images/login.jpeg" height="26px" weight="26px" alt="">
                  <span>
                    Login
                  </span>
                </a>
                <?php
                  }
                
              ?>
               
              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
</body>
</html>
