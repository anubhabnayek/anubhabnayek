<?php
include_once('model.php'); //step 1 load model
class control extends model //step 2 extends

{
function __construct(){
   // session_start();

    model::__construct(); //step 3 call model__construct
    date_default_timezone_set('asia/calcutta');
    $url=$_SERVER['PATH_INFO'];
    switch($url)
    {
       
       
                           
                                case '/index':
                                //$country_arr=$this->select('country');
                                if(isset($_REQUEST['submit'])){
                               //echo"<pre>";print_r($_REQUEST);exit;

                                    $name=$_REQUEST['name'];
                                    $email=$_REQUEST['email'];
                                    $password=md5($_REQUEST['password']);
                                    $date_of_birth=$_REQUEST['date_of_birth'];
                                    $phone_no=$_REQUEST['phone_no'];
                                    $language_arr=$_REQUEST['language'];
                                    $language=implode(",",$language_arr);
                                    $gender=$_REQUEST['gender'];
                                    //$c_id=$_REQUEST['c_id'];
                                   

                                    //upload image
                                    
                                    $file=$_FILES['file']['name'];
                                    $path="upload/".$file;
                                    $tmp_file=$_FILES['file']['tmp_name'];
                                    move_uploaded_file($tmp_file,$path);
                                    //echo"<pre>";print_r($_FILES);exit;
                                    $created_at=date("y-m-d H:i:s");
                                    $updated_at=date("y-m-d H:i:s");
                                    //echo"<pre>";print_r($arr);exit;
                                    $arr=array("name"=>$name,"email"=>$email,"password"=>$password,"date_of_birth"=>$date_of_birth,'phone_no'=>$phone_no,"language"=>$language,"gender"=>$gender,"file"=>$file,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                    $res=$this->insert('student',$arr);
                                    //echo"<pre>";print_r($res);exit;

                                    if($res){
                                    echo"<script>
                                        alert('Student Registered Success');
                                        window.location='view';

                                        </script>"; 
                                    }
                                    else{
                                        echo"<script>
                                    
                                        alert('Failed');
                                        </script>";

                                    }
                                    
                            }
                        

                               
                                
                                include_once('index.php');
                                break;
                               
                                    case '/logout':
                                    // unset($_SESSION['user']);
                                    // unset($_SESSION['name']);
                                    // unset($_SESSION['uid']);


                                    // echo"<script>
                                    //       alert('customers logout success');
                                    //       window.location='index';
                                    //       </script>";

                                        break;
                                        case '/view':
                                            $data_display=$this->select('student');
                                            include_once('view.php');
                                                break;

                                        case '/edit':
                                            if(isset($_REQUEST['edit_id'])){
                                                $std_id=$_REQUEST['edit_id'];
                                                $where=array("std_id"=>$std_id);
                                                $run=$this->select_where('student',$where);
                                                $fetch=$run->fetch_object();
                                                $userfile=$fetch->file;

                                                    if(isset($_REQUEST['save'])){
                                                        $name=$_REQUEST['name'];
                                                        $email=$_REQUEST['email'];
                                                        $date_of_birth=$_REQUEST['date_of_birth'];
                                                        $phone_no=$_REQUEST['phone_no'];
                                                        
                                                        //$c_id=$_REQUEST['c_id'];
                                                        $language_arr=$_REQUEST['language'];
                                                        $language=implode(",",$language_arr);
                                                        $gender=$_REQUEST['gender'];
                                                        $updated_at=date("y-m-d H:i:s");

                                                        //upload image
                                                        if($_FILES['file']['size']>0)
                                                        
                                                        $file=$_FILES['file']['name'];
                                                        $path="../upload/customer/".$file;
                                                        $tmp_file=$_FILES['file']['tmp_name'];
                                                        move_uploaded_file($tmp_file,$path);
                                                        //echo"<pre>";print_r($_FILES);exit;
                                                        $arr=array("name"=>$name,"email"=>$email,"password"=>$password,"date_of_birth"=>$date_of_birth,'phone_no'=>$phone_no,"language"=>$language,"gender"=>$gender,"file"=>$file,"updated_at"=>$updated_at);

                                                        $res=$this->update('student',$arr,$where);
                                                        
                                                        if($res){
                                                            unlink('upload/'.$userfile);
                                                            echo"<script>
                                                            alert('Customer update Success');
                                                            window.location='view';

                                                            </script>";
                                                        }
                                                        else{
                                                            $arr=array("name"=>$name,"email"=>$email,"password"=>$password,"date_of_birth"=>$date_of_birth,'phone_no'=>$phone_no,"language"=>$language,"gender"=>$gender,"file"=>$file,"updated_at"=>$updated_at);
                                                            $res=$this->update('student',$arr,$where);
                                                            
                                                            if($res){
                                                                echo"<script>
                                                                alert('Customer update Success');
                                                                </script>";

                                                        }
                                                             
                                                        }
                                                        
                                                    }
                                                }
                                            

                                               
                                            include_once('edit.php');
                                            break;
                                            case '/delete':
                                                if(isset($_REQUEST['delete_id'])){
                                                    $std_id=$_REQUEST['delete_id'];
                                                    $where=array("std_id"=>$std_id);
                                                    $res=$this->delete_where('student',$where);
                                                    if($res){
                                                        echo "
                                                            <script>
                                                            alert('deleted data');
                                                            window.location='view';
                                                            </script>
                                                            ";
                                                    }
                                                }

                                            break;

                                            


                                    default:
                                    echo "<h1>Page Not Found</h1>";
                                    break;
                                    }                              
}

}

$obj=new control();


?>