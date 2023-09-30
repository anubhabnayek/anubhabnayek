<?php
include_once('model.php'); //step 1 load model
class control extends model //step 2 extends

{
 function __construct(){
    date_default_timezone_set('asia/calcutta');
    session_start();
    model::__construct(); //step 3 call model__construct
    $url=$_SERVER['PATH_INFO'];
    switch($url)
    {
                   case '/dashboard':
                        include_once('dashboard.php');
                        break;
                        case '/index':
                            include_once('index.php');
                            break;
                            case '/form':
                                if(isset($_REQUEST['submit'])){

                                    $category=$_REQUEST['category'];
                                    $book_name=$_REQUEST['book_name'];
                                    $author=$_REQUEST['author'];
                                    $Quantity=$_REQUEST['Quantity'];
                                    $price=$_REQUEST['price'];
                                    $created_at=date('Y-m-d H:i:s');
                                    $updated_at=date('Y-m-d H:i:s');
                                    $arr=array("category"=>$category,"book_name"=>$book_name,"author"=>$author,"Quantity"=>$Quantity,"price"=>$price,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                    $res=$this->insert('book',$arr);
                                    if($res){
                                        echo"<script>
                                        alert(' add book id success');
                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('Failed');
                                        </script>";  
                                    }
                                }
                                include_once('form.php');
                                break;
                                case '/viewbook':
                                    $book_arr=$this->select('book');
                                    include_once('viewbook.php');
                                    break;
                                     case '/edit':
                                        if(isset($_REQUEST['edit_book_id'])){
                                    $book_id=$_REQUEST['edit_book_id'];
                                    $where=array("book_id"=>$book_id);
                                    $run=$this->select_where('book',$where);
                                    $fetch=$run->fetch_object();


                                    if(isset($_REQUEST['submit'])){
                                    $category=$_REQUEST['category'];
                                    $book_name=$_REQUEST['book_name'];
                                    $author=$_REQUEST['author'];
                                    $Quantity=$_REQUEST['Quantity'];
                                    $price=$_REQUEST['price'];
                                    $updated_at=date('Y-m-d H:i:s');
                                    $arr=array("category"=>$category,"book_name"=>$book_name,"author"=>$author,"Quantity"=>$Quantity,"price"=>$price,"updated_at"=>$updated_at);
                                    $res=$this->update('book',$arr,$where);
                                    if($res){
                                        echo"<script>
                                        alert('Customer update Success');
                                        window.location='viewbook?edit_book=true';
                                        </script>"; 
                                    }
                                    
                                        }
                                    }

                                        include_once('editbook.php');
                                        break;
                                        case '/delete':
                                         if(isset($_REQUEST['del_book_id'])){
                                         $book_id=$_REQUEST['del_book_id'];
                                        //echo"<pre>";print_r($_REQUEST);exit;
                                         $where=array("book_id"=>$book_id);
                                         $res=$this->delete_where('book',$where);
                                         if($res){
                                            echo"<script>
                                            alert('delete data Success');
                                            window.location='viewbook?delete_book=true';
                                            </script>";
                                        }else{
                                            echo"fail";
                                        }
        
                                    }
                                    break;
                                    case '/searchbook':
                                        $book_arr=$this->select('book');
                                        include_once('searchbook.php');
                                        break;
                    
                                case '/signup':
                                    if(isset($_POST['signup']))
                                    { 
                    /* echo"<pre>";
                        print_r($_POST);
                        exit;*/ 
                                $fullname=$_POST['fullname'];

                                $mobileno=$_POST['mobileno'];
                                $email=$_POST['email']; 
                                $password=md5($_POST['password']);
                                $confirmpassword=md5($_POST['confirmpassword']); 
                                $status=1;
                                $created_at=date("y-m-d H:i:s");
                                $updated_at=date("y-m-d H:i:s");
                                $arr=array("fullname"=>$fullname,"mobileno"=>$mobileno,"email"=>$email,"password"=>$password,"confirmpassword"=>$confirmpassword,"status"=>$status,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                $res=$this->insert(' tblstudents',$arr);
                                if($res){
                                    echo"<script>
                                    alert('Customer Inquiry Registered Success');
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
                                    if(isset($_REQUEST['login'])){
                                    $email=$_REQUEST['email'];
                                    $password=md5($_REQUEST['password']);


                                    $where=array("email"=>$email,"password"=>$password);

                                    $res=$this->select_where('tblstudents',$where);
                                    //echo"<pre>";print_r($res);exit;

                                     $chk=$res->num_rows; //condition res check by rows

                                    if($chk==1)  //1 means true
                                    {
                                        $_SESSION['user']=$email;//create session
                                        echo"<script>
                                        alert('Customers login Success');
                                        window.location='dashboard';
                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('login Failed');
                                        </script>";
                                    }
                                    }

                                    include_once('login.php');
                                    break;
                                    case '/logout':

                                    include_once('logout.php');
                                    break;

                                    default:
                                    include_once('pagenotfound.php');
                                    break;
    }                               
}

}
$obj=new control();


?>