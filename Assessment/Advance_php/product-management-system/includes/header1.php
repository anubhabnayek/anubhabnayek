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
<?php
// if(!($_SESSION['user'])){
//     echo"<script> 
//     window.location='login';
//     </script>
//     ";
// }
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
<section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a <?php active('index.php')?> href="" class="menu-top-active">DASHBOARD</a></li>
                            <!-- <li><a href="pagenotfound">Issued Books</a></li> -->
                             <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">My Profile</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="">Change Password</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>