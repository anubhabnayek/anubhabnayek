<?php
class control{
function __construct(){
    $url=$_SERVER['PATH_INFO'];
    switch($url){
        case '/index':
        include_once('index.php');
        break;

        case '/about':
        include_once('about.php');
        break;

        case '/buy':
        include_once('buy.php');
        break;
         
        case '/contact':
        include_once('contact.php');
        break;

        case '/medicine':
        include_once('medicine.php');
        break;

        case '/news':
        include_once('news.php');
        break;
          
        case '/signup':
            include_once('signup.php');
            break;

        


        default:
        include_once('pagenotfound.php');
        break;
    }
}
}
$obj=new control;
?>