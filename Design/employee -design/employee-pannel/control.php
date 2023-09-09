<?php
// include_once('model.php');
class control 

 {
function __construct(){
    //model::__construct();
    $url=$_SERVER['PATH_INFO'];
    switch($url){
        case '/login':
           
        include_once('login.php');
        break;

        case '/index':
        include_once('index.php');
        break;

        case '/add_cate':
           
        include_once('add_cate.php');
        break;
         
        case '/add_emp':

        include_once('add_emp.php');
        break;

        case '/add_prod':
           
        include_once('add_prod.php');
        break;


        case '/manage_cate':
        include_once('manage_cate.php');
        break;
          
        case '/manage_prod':
            include_once('manage_prod.php');
            break;

       

        default:
        include_once('pagenotfound.php');
        break;
    }
}
}
$obj=new control;
?>