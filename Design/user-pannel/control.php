<?php
include_once('model.php'); //step 1 load model
class control extends model //step 2 extends

{
function __construct(){
    session_start();

    model::__construct(); //step 3 call model__construct
    date_default_timezone_set('asia/calcutta');
    $url=$_SERVER['PATH_INFO'];
    switch($url)
    {
        case '/index':
            include_once('index.php');
            break;
            case '/index2':
                include_once('index2.php');
                break;
            case '/about':
                include_once('about.php');
                break;
                case '/medicine':
                    include_once('medicine.php');
                    break;
                    case '/news':
                        include_once('news.php');
                        break;
                        case '/buy':
                            include_once('buy.php');
                            break;
                            case '/contact':

                                if(isset($_REQUEST['submit'])){
                                
                                    $name=$_REQUEST['name'];
                                    $email=$_REQUEST['email'];
                                    $message=$_REQUEST['message'];

                                    $created_at=date("y-m-d H:i:s");
                                    $updated_at=date("y-m-d H:i:s");

                                    $arr=array("name"=>$name,"email"=>$email,"message"=>$message,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                    //echo"<pre>";print_r($arr);exit;

                                    $res=$this->insert('contact',$arr);
                                    if($res){
                                        echo"<script>
                                        alert('Contact Inquiry Registered Success');
                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('Failed');
                                        </script>";
                                    }
                                }
                                include_once('contact.php');
                                break;

                                case '/signup':
                                $country_arr=$this->select('country');
                                if(isset($_REQUEST['submit'])){
                                    $name=$_REQUEST['name'];
                                    $email=$_REQUEST['email'];
                                    $password=md5($_REQUEST['password']);
                                    $language_arr=$_REQUEST['language'];
                                    $language=implode(",",$language_arr);
                                    $gender=$_REQUEST['gender'];
                                    $c_id=$_REQUEST['c_id'];
                                   

                                    //upload image
                                    
                                    $file=$_FILES['file']['name'];
                                    $path="../upload/customer/".$file;
                                    $tmp_file=$_FILES['file']['tmp_name'];
                                    move_uploaded_file($tmp_file,$path);
                                    //echo"<pre>";print_r($_FILES);exit;
                                    $created_at=date("y-m-d H:i:s");
                                    $updated_at=date("y-m-d H:i:s");

                                    $arr=array("name"=>$name,"email"=>$email,"password"=>$password,"language"=>$language,"gender"=>$gender,"c_id"=>$c_id,"file"=>$file,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                    $res=$this->insert('customers',$arr);
                                    if($res){
                                    echo"<script>
                                        alert('Customer Registered Success');
                                        </script>"; 
                                    }
                                    else{
                                        echo"<script>
                                    
                                        alert('Failed');
                                        </script>";

                                    }
                                    
                            }
                        

                               
                                
                                include_once('signup.php');
                                break;
                                case '/login':
                                    if(isset($_REQUEST['submit'])){
                                
                                        $email=$_REQUEST['email'];
                                        $password=md5($_REQUEST['password']);
    

                                        $where=array("email"=>$email,"password"=>$password);
    
                                        $res=$this->select_where('customers',$where);
                                        //echo"<pre>";print_r($res);exit;

                                         $chk=$res->num_rows; //condition res check by rows

                                        if($chk==1)  //1 means true
                                        {
                                            $fetch=$res->fetch_object();
                                           // echo"$Status";exit;
                                            $Status=$fetch->Status;
                                            if($Status=="Unblock")
                                            {

                                            $_SESSION['user']=$fetch->email;//create session
                                            //echo $_SESSION;exit;
                                            $_SESSION['name']=$fetch->name;//create session
                                            $_SESSION['uid']=$fetch->uid;

                                            echo"<script>
                                            alert('Customers login Success');
                                            window.location='index';
                                            </script>";
                                            }
                                            else{
                                                echo"<script>
                                            alert('login failed due to Blocked Account');
                                            window.location='login';
                                            </script>";
                                            }
                                        }
                                        else{
                                            echo"<script>
                                            alert('login Failed Failed');
                                            </script>";
                                        }
                                    }
                                    include_once('login.php');
                                    break;
                                    
                                    case '/logout':
                                    unset($_SESSION['user']);
                                    unset($_SESSION['name']);
                                    unset($_SESSION['uid']);


                                    echo"<script>
                                          alert('customers logout success');
                                          window.location='index';
                                          </script>";

                                        break;

                                        case '/edituser':
                                            $country_arr=$this->select('country');
                                            if(isset($_REQUEST['edituid'])){
                                                $uid=$_REQUEST['edituid'];
                                                $where=array("uid"=>$uid);
                                                $run=$this->select_where('customers',$where);
                                                $fetch=$run->fetch_object();
                                                $userfile=$fetch->file;
                                                
                                                    if(isset($_REQUEST['save'])){
                                                        $name=$_REQUEST['name'];
                                                        $language_arr=$_REQUEST['language'];
                                                        $language=implode(",",$language_arr);
                                                        $gender=$_REQUEST['gender'];
                                                        $c_id=$_REQUEST['c_id'];
                                                        $updated_at=date("y-m-d H:i:s");

                                                        //upload image
                                                        if($_FILES['file']['size']>0)
                                                        
                                                        $file=$_FILES['file']['name'];
                                                        $path="../upload/customer/".$file;
                                                        $tmp_file=$_FILES['file']['tmp_name'];
                                                        move_uploaded_file($tmp_file,$path);
                                                        //echo"<pre>";print_r($_FILES);exit;
                    
                                                        $arr=array("name"=>$name,"language"=>$language,"gender"=>$gender,"c_id"=>$c_id,"file"=>$file,"updated_at"=>$updated_at);
                                                        $res=$this->update('customers',$arr,$where);
                                                        
                                                        if($res){
                                                            unlink('../upload/customer/'.$userfile);
                                                            echo"<script>
                                                            alert('Customer update Success');
                                                            window.location='profile';
                                                            </script>";
                                                        }
                                                        else{
                                                            $arr=array("name"=>$name,"language"=>$language,"gender"=>$gender,"c_id"=>$c_id,"updated_at"=>$updated_at);
                                                            $res=$this->update('customers',$arr,$where);
                                                            
                                                            if($res){
                                                                echo"<script>
                                                                alert('Customer update Success');
                                                                window.location='profile';
                                                                </script>";

                                                        }
                                                             
                                                        }
                                                        
                                                    }
                                                }
                                            

                                               
                                            include_once('edituser.php');
                                            break;

                                        case '/profile':
                                            $where=array("uid"=>$_SESSION['uid']);
                                            $res=$this->select_where('customers',$where);
                                            $fetch=$res->fetch_object();
                                            //echo"<pre>";print_r($res);exit;

                                            include_once('profile.php');
                                            break;


                                    default:
                                    include_once('pagenotfound.php');
                                    break;
                                    }                              
}

}

$obj=new control();


?>