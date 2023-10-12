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
                            case '/Add_product':
                                if(isset($_REQUEST['submit'])){

                                    $product_name=$_REQUEST['product_name'];
                                    $price=$_REQUEST['price'];
                                    $product_img=$_FILES['product_img']['name'];
                                    $path="upload/product/".$product_img;
                                    $tmp_file=$_FILES['product_img']['tmp_name'];
                                    move_uploaded_file($tmp_file,$path);
                                    $created_at=date('Y-m-d H:i:s');
                                    $updated_at=date('Y-m-d H:i:s');
                                    $arr=array("product_name"=>$product_name,"price"=>$price,"product_img"=>$product_img,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                    $res=$this->insert('product',$arr);
                                    if($res){
                                        echo"<script>
                                        alert(' add product success');
                                        window.location='viewproduct';

                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('Failed');
                                        </script>";  
                                    }
                                }
                                include_once('Add_product.php');
                                break;
                                case '/viewproduct':
                                    $product_arr=$this->select('product');
                                    include_once('viewproduct.php');
                                    break;
                                     case '/edit':
                                        if(isset($_REQUEST['edit_product_id'])){
                                    $id=$_REQUEST['edit_product_id'];
                                    $where=array("id"=>$id);
                                    $run=$this->select_where('product',$where);
                                    $fetch=$run->fetch_object();
                                    $userfile=$fetch->product_img;

                                    if(isset($_REQUEST['submit'])){
                                    $product_name=$_REQUEST['product_name'];
                                    $price=$_REQUEST['price'];
                                    $updated_at=date('Y-m-d H:i:s');
									//image upload
									  //if($_FILES['product_img']['size']>0)
									$product_img=$_FILES['product_img']['name'];
                                    $path="upload/product/".$product_img;
                                    $tmp_file=$_FILES['product_img']['tmp_name'];
                                    move_uploaded_file($tmp_file,$path);
                                    $arr=array("product_name"=>$product_name,"price"=> $price,"product_img"=>$product_img,"updated_at"=>$updated_at);
                                    $res=$this->update('product',$arr,$where);
									//echo"<pre>";print_r($_FILES);exit;

                                    if($res){
										  unlink('upload/product/'.$userfile);
                                        echo"<script>
                                        alert('Customer update Success');
                                        window.location='viewproduct';
                                        </script>"; 
                                    }
                                    
                                        }
                                    }

                                        include_once('editproduct.php');
                                        break;
                                        case '/delete':
                                         if(isset($_REQUEST['del_prod_id'])){
                                         $id=$_REQUEST['del_prod_id'];
                                        //echo"<pre>";print_r($_REQUEST);exit;
                                         $where=array("id"=>$id);
                                         $res=$this->delete_where('product',$where);
                                         if($res){
                                            echo"<script>
                                            alert('delete data Success');
                                            window.location='viewproduct?delete_book=true';
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
                                            $run=$this->select_where('state',$where);
                                            ?>
                                            <option>------------Select State----</option>
                                            <?php
                                                $state_arr = array();
                                                while($fetch=$run->fetch_object()){
                                                    $state_arr[]=$fetch;
                                                }
                                                foreach($state_arr as $r)
                                                {
                                                ?>
                                                    <option value="<?php echo $r->sid;?>">
                                                                    <?php echo $r->snm;?>
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
                                            alert('product manager login Success');
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