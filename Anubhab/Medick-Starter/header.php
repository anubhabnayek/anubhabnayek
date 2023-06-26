
<?php
/*function active($currect_page)
{
  $url_array=explode('/', $_SERVER['REQUEST_URI']) ;
  $url=end($url_array);  
  if($currect_page == $url)
  {
      echo 'active'; //class name in css 
  } 
}
*/
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



<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype php>
<php lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords"
    content="Medick Responsive web template, Bootstrap Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <title>Medick Medical Category Bootstrap Responsive Web Template | About :: W3Layouts </title>
  <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
  <div class="header-w3l">
    <!-- header -->
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
          <a class="navbar-brand" href="index.php">
          Med<span class="sub-logo">i</span>ck</span>
          </a>
          <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.php">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-lg-auto">
              <li class="nav-item<?php active('index.php')?>">
                <a class="nav-link"href="index.php">Home</a>
              </li>
              <li class="nav-item <?php active('about.php')?>">
                <a class="nav-link"href="about.php">About</a>
              </li>
              <li class="nav-item <?php active('services.php')?>">
                <a class="nav-link"href="services.php">Departments</a>
              </li>
              
              <li class="nav-item <?php active('contact.php')?>">
                <a class="nav-link"href="contact.php">Contact</a>
              </li>

              <li class="nav-item <?php active('login.php')?>">
                <a class="nav-link"href="login.php">Login</a>
              </li>
              <li class="search-bar ml-lg-3 mr-lg-5 mt-lg-0 mt-4">
                <!--/search-right-->
                <form class="search position-relative">
                  <input type="search" class="search__input" name="search" placeholder="Search here.."
                    onload="equalWidth()" required="">
                  <span class="fa fa-search search__icon"></span>
                </form>

                <!--//search-right-->
              </li>

            </ul>

          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
            <nav class="navigation">
              <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox">
                  <div class="mode-container">
                    <i class="gg-sun"></i>
                    <i class="gg-moon"></i>
                  </div>
                </label>
              </div>
            </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
        </nav>
      </div>
    </header>
    </div>
    <!-- //header -->