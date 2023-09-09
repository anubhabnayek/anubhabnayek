<?php
include_once('../user-pannel/model.php');
class control extends model{
function __construct()
{
    session_start();
    model::__construct();
    $url=$_SERVER['PATH_INFO'];
    switch($url){
        case '/admin':
            
            
        include_once('index.php');
        break;
        case '/admin_logout':
           

                break;


        case '/dashboard':
        include_once('dashboard.php');
        break;

        case '/add_cate':
           
        include_once('add_cate.php');
        break;
        
        /*case '/add_cust':
        include_once('add_cust.php');
        break;*/
         
        case '/add_emp':
            
                    
             
        include_once('add_emp.php');
        break;

        case '/add_prod':
           
           
        include_once('add_prod.php');
        break;

        case '/manage_cust':
        include_once('manage_cust.php');
        break;

        case '/manage_cate':
        include_once('manage_cate.php');
        break;
        case '/editcate':
            
               
              
            include_once('editcate.php');
            break;

            case '/editemp':
                
                    
    
                    
                  
                include_once('editemp.php');
                break;

              case '/editprod':
                
                   
                    
                  
                include_once('editprod.php');
                break;
    

          
        case '/manage_prod':
        include_once('manage_prod.php');
        break;

       
        case '/manage_emp':
                include_once('manage_emp.php');
                break;

        case '/manage_feedback':
            include_once('manage_feedback.php');
            break;
            
            case '/delete':
              
                    
              

                
               
                break;

                case '/profile':
                    
                   
                    include_once('profile.php');
                    break;

                    case '/status':
                           
                                   
                          
                           
                           break;
                           case '/status1':
                           
                                 
                            
                            break;
         
        

                           
                       


        default:
        include_once('pagenotfound.php');
        break;
    }
}
}
$obj=new control;
?>