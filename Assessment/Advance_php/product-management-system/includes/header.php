
<?php
// if(!($_SESSION['user'])){
//     echo"<script> 
//     window.location='login';
//     </script>
//     ";
// }
?>
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


<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >

                    <img src="assets/img/product1.jpg" height="120" width="120" />
                </a>

            </div>
<?/*php if($_SESSION['login'])
{*/
?> 
            <div class="right-div">
                <a href="logout" class="btn btn-danger pull-right">LOG ME OUT</a>
            </div>
            <?php //}?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
<?/*php if($_SESSION['login'])
{*/
?>    

    <?php/* } else { */?>
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                          
      <li><a <?php active('index.php')?> href="index">Home</a></li>
      <li><a <?php active('login.php')?> href="login">Login</a></li>
                            <li><a <?php active('signup.php')?> href="signup">Customer Signup</a></li>
                            <li><a <?php active('prod_manager_signup.php')?> href="prod_manager_signup">Product Manager Signup</a></li>

                            <!--<li><a href="adminlogin.php">Admin Login</a></li>-->

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php// } ?>