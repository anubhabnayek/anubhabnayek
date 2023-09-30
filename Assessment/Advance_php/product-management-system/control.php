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
                        case '/purchese_stock':
                            include_once('purchese_stock.php');
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
                                   
                    
                                case '/signup':
                                    $city_arr=$this->select('city');

                                    if(isset($_POST['signup']))
                                    { 
                                // echo"<pre>";print_r($_POST);exit; 
                                $fullname=$_POST['fullname'];

                                $mobileno=$_POST['mobileno'];
                                $email=$_POST['email']; 
                                $password=md5($_POST['password']);
								$gender=$_POST['gender'];
								$city=$_POST['city'];
                                $state=$_POST['state'];
                                $created_at=date("y-m-d H:i:s");
                                $updated_at=date("y-m-d H:i:s");
                                $role=1;
                                $arr=array("fullname"=>$fullname,"mobileno"=>$mobileno,"email"=>$email,"password"=>$password,"gender"=>$gender,"city"=>$city,"state"=>$state,"created_at"=>$created_at,"updated_at"=>$updated_at,"role"=>$role);
                                $res=$this->insert('customers',$arr);
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
								
								
                                    case '/prod_manager_signup':
                                    $city_arr=$this->select('city');

                                    if(isset($_POST['submit']))
                                    { 
                                // echo"<pre>";print_r($_POST);exit; 
                                $fullname=$_POST['fullname'];
                                $mobileno=$_POST['mobileno'];
                                $email=$_POST['email']; 
                                $password=md5($_POST['password']);
								$gender=$_POST['gender'];
								$city=$_POST['city'];
                                $state=$_POST['state'];
                                $role=2;
                                $created_at=date("y-m-d H:i:s");
                                $updated_at=date("y-m-d H:i:s");
                                $arr=array("fullname"=>$fullname,"mobileno"=>$mobileno,"email"=>$email,"password"=>$password,"gender"=>$gender,"city"=>$city,"state"=>$state,"created_at"=>$created_at,"updated_at"=>$updated_at,"role"=>$role);
                                $res=$this->insert('product_manager',$arr);
                                if($res){
                                    echo"<script>
                                    alert('product manager Inquiry Registered Success');
                                    </script>"; 
                                }
                                else{
                                    echo"<script>
                                    alert('Failed');
                                    </script>"; 
                                }

                                }


                                include_once('prod_manager_signup.php');
                                break;
                                case '/statedata':
                                    if(isset($_REQUEST['btn']))
                                        {
                                            $city_id=$_REQUEST['btn'];
                                            $where=array("city_id"=>$city_id);
                                            $state_arr=$this->select_where('state',$where);
                                            ?>
                                            <option>------------Select State----</option>
                                            <?php
                                            foreach($state_arr as $r)
                                            {
                                            ?>
                                                <option value="<?php echo $r->sid; ?>">
                                                                <?php echo $r->snm; ?>
                                                </option>
                                            <?php 
                                            }
                                        }
                                    
                                    break;



                                
                                    case '/login':
                                      $arr_role=$this->select('role');
                                    if(isset($_REQUEST['login'])){
                                    $email=$_REQUEST['email'];
                                    $password=md5($_REQUEST['password']);
                                    $role=$_REQUEST['role'];
                                  // echo"<pre>";print_r($_REQUEST);exit;


                                    $where=array("email"=>$email,"password"=>$password,"role"=>$role);
                                    $table = "customers";

                                    if ($role == "2") {
                                        $table = "product_manager";
                                    }
                                    
                                    $res = $this->select_where($table,$where);
                                    //$res=$this->select_where('customers',$where);

                                    //echo"<pre>";print_r($res);exit;
                                    $chk=$res->num_rows; //condition res check by rows
									if($chk==1)  //1 means true
									 {
                                        $_SESSION['email']=$email;//create session
                                        $_SESSION['role']=$role;//create session
                                        if ($role == "1"){
                                        echo"<script>
                                        alert('Customers login Success');
                                        window.location='purchese_stock';
                                        </script>";
                                        }
                                        elseif($role == "2") {
                                            echo"<script>
                                            alert('Customers login Success');
                                            window.location='Add_product';
                                            </script>"; 
                                        }
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