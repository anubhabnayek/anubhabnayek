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
 
 
 <!-- header section strats -->
 <header class="header_section">
      <div class="container">
        <div class="top_contact-container">
          <div class="tel_container">
            <a href="">
              <img src="medical_instrument/medion/images/telephone-symbol-button.png" alt=""> Call : +01 1234567890
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
          <a class="navbar-brand" href="index">
            <img src="images\aanubhab.png" alt="">
            <span>
              Medicocare
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link<?php active('index.php')?>" href="index">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php active('about.php')?>" href="about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php active('medicine.php')?>" href="medicine"> Medicine </a>
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
                <li class="nav-item">
                  <a class="nav-link <?php active('signup.php')?>" href="signup">Sign up</a>
                </li>
                
              </ul>
              <form class="form-inline">
                <input type="search" placeholder="Search">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a href="login">
                  <img src="images/user.png" alt="">
                  <span>
                    Login
                  </span>
                </a>
              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->