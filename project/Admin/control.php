<?php
include_once('../medical/model.php');
class control extends model{
function __construct()
{
    session_start();
    model::__construct();
    $url=$_SERVER['PATH_INFO'];
    switch($url){
        case '/admin':
            if(isset($_REQUEST['submit'])){
                $anm=$_REQUEST['anm'];
                $apsw=md5($_REQUEST['apsw']);
                //echo"<pre>";print_r($_REQUEST);exit;
                $where=array("anm"=>$anm,"apsw"=>$apsw);
                $res=$this->select_where('admin',$where);
               
                $chk=$res->num_rows;
                
                if($chk==1){
                    $fetch=$res->fetch_object();
                    $_SESSION['admin']=$fetch->anm;
                    $_SESSION['admin_id']=$fetch->admin_id;
                    echo"<script>

                    alert('Admin login success');
                    window.location='dashboard';
                    </script>";
                }
                else{
                    echo"<script>
                    alert('Admin login failed');
                    </script>
                    ";
                }

            }
        include_once('index.php');
        break;
        case '/admin_logout':
            unset($_SESSION['admin']);
            unset($_SESSION['admin_id']);

            echo"<script>
                  alert('Admin logout success');
                  window.location='admin';
                  </script>";

                break;


        case '/dashboard':
        include_once('dashboard.php');
        break;

        case '/add_cate':
            if(isset($_REQUEST['submit'])){
                $category_name=$_REQUEST['category_name'];
                $category_img=$_FILES['category_img']['name'];
                $path="../upload/category/".$category_img;
                $tmp_file=$_FILES['category_img']['tmp_name'];
                move_uploaded_file($tmp_file,$path);
                $created_at=date('Y-m-d H:i:s');
                $updated_at=date('Y-m-d H:i:s');
              //echo"<pre>";print_r($_REQUEST);exit;

                $arr=array("category_name"=>$category_name,"category_img"=>$category_img,"created_at"=>$created_at,"updated_at"=>$updated_at);
                $res=$this->insert('category',$arr);
                if($res){
                    echo"<script>
                    alert('Category inserted success');
                    </script>
                    ";

                }
                else{
                    echo"<script>
                    alert('not inserted');
                    </script>
                    ";
                }

            }
        include_once('add_cate.php');
        break;
        
        /*case '/add_cust':
        include_once('add_cust.php');
        break;*/
         
        case '/add_emp':
             if(isset($_REQUEST['submit'])){
                $Emp_name=$_REQUEST['Emp_name'];
                $email=$_REQUEST['email'];
                $password=md5($_REQUEST['password']);
                $created_at=date('Y-m-d H:i:s');
                $updated_at=date('Y-m-d H:i:s');
                $array=array("Emp_name"=>$Emp_name,"email"=>$email,"password"=>$password,"created_at"=>$created_at,"updated_at"=>$updated_at);
                $result=$this->insert('employee',$array);
               // echo"<pre>";print_r($result);exit;

                 if($result)
                    {
                        echo "
                        <script>
                        alert('inserted data');
                        window.location='add_emp';
                        </script>
                        ";
                    }
                    else
                    {
                        echo "
						<script>
                        alert('data not inserted');
                        window.location='add_emp';
                        </script>
						";
                    }
                }
             
        include_once('add_emp.php');
        break;

        case '/add_prod':
            if(isset($_REQUEST['submit'])){
                $product_name=$_REQUEST['product_name'];
                $product_img=$_FILES['product_img']['name'];
                $path="../upload/product/".$product_img;
                $tmp_file=$_FILES['product_img']['tmp_name'];
                move_uploaded_file($tmp_file,$path);
                $discount_price=$_REQUEST['discount_price'];
                $main_price=$_REQUEST['main_price'];
                $description=$_REQUEST['description'];
                $created_at=date('Y-m-d H:i:s');
                $updated_at=date('Y-m-d H:i:s');
                //echo"<pre>";print_r($_FILES);exit;
                $arr=array("product_name"=>$product_name,"product_img"=>$product_img,
                "discount_price"=>$discount_price,"main_price"=>$main_price,"description"=>$description,"created_at"=>$created_at,"updated_at"=>$updated_at);
                $res=$this->insert('products',$arr);
                echo"<pre>";print_r($res);exit;

                if($res){
             echo"</script>
             alert('product inserted success');
             
             </script>";
                }
            else{
            echo"</script>
            alert('product not inserted');
            </script>";

                }
            }
        include_once('add_prod.php');
        break;

        case '/manage_cust':
        $data_customer=$this->select('customers');
        include_once('manage_cust.php');
        break;

        case '/manage_cate':
        $data_category=$this->select('category');
        include_once('manage_cate.php');
        break;
        case '/editcate':
            if(isset($_REQUEST['editcategory_id'])){
                $id=$_REQUEST['editcategory_id'];
                $where=array("id"=>$id);
                $run=$this->select_where('category',$where);
                $fetch=$run->fetch_object();


                if(isset($_REQUEST['submit'])){
                $category_name=$_REQUEST['category_name'];
                $category_img=$_FILES['category_img']['name'];
                $path="../upload/category/".$category_img;
                $tmp_file=$_FILES['category_img']['tmp_name'];
                move_uploaded_file($tmp_file,$path);
                $updated_at=date('Y-m-d H:i:s');
              //echo"<pre>";print_r($_REQUEST);exit;

                $arr=array("category_name"=>$category_name,"category_img"=>$category_img,"updated_at"=>$updated_at);
                $res=$this->update('category',$arr,$where);
                // echo"<pre>";
                // print_r($arr);
                // exit;
                if($res){
                    echo"<script>
                    
                        alert('Customer update Success');
                        window.location='manage_cate';
                    
                        </script>"; 
                    }

                    
            }
        
                }

                
              
            include_once('editcate.php');
            break;

            case '/editemp':
                if(isset($_REQUEST['editemployee_id'])){
                    $emp_id=$_REQUEST['editemployee_id'];
                    $where=array("emp_id"=>$emp_id);
                    $run=$this->select_where('employee',$where);
                    $fetch=$run->fetch_object();
    
    
                    if(isset($_REQUEST['submit'])){
                    $Emp_name=$_REQUEST['Emp_name'];
                    $email=$_REQUEST['email'];
                    $updated_at=date('Y-m-d H:i:s');
                  //echo"<pre>";print_r($_REQUEST);exit;
    
                    $arr=array("Emp_name"=>$Emp_name,"email"=>$email,"updated_at"=>$updated_at);
                    $res=$this->update('employee',$arr,$where);
                    // echo"<pre>";
                    // print_r($arr);
                    // exit;
                    if($res){
                        echo"<script>
                        
                        
                            alert('employee update Success');
                            window.location='manage_emp';
                        
                            </script>"; 
                        }
    
                        
                }
            
                    }
    
                    
                  
                include_once('editemp.php');
                break;

              case '/editprod':
                if(isset($_REQUEST['editproduct_id'])){
                    $id=$_REQUEST['editproduct_id'];
                    $where=array("id"=>$id);
                    $run=$this->select_where('products',$where);
                    $fetch=$run->fetch_object();
    
    
                    if(isset($_REQUEST['submit'])){
                    $product_name=$_REQUEST['product_name'];
                    $discount_price=$_REQUEST['discount_price'];
                    $main_price=$_REQUEST['main_price'];
                    $description=$_REQUEST['description'];

                    $product_img=$_FILES['product_img']['name'];
                    $path="../upload/products/".$product_img;
                    $tmp_file=$_FILES['product_img']['tmp_name'];
                    move_uploaded_file($tmp_file,$path);
                    $updated_at=date('Y-m-d H:i:s');
                  //echo"<pre>";print_r($_REQUEST);exit;
    
                    $arr=array("product_name"=>$product_name,"product_img"=>$product_img,"discount_price"=>$discount_price,"main_price"=>$main_price,"description"=>$description,"updated_at"=>$updated_at);
                    $res=$this->update('products',$arr,$where);
                    if($res){
                        echo"<script>
                        
                            alert('product update Success');
                            window.location='manage_prod';
                        
                            </script>"; 
                        }
    
                        
                }
            
                    }
    
                    
                  
                include_once('editprod.php');
                break;
    

          
        case '/manage_prod':
        $data_products=$this->select('products');
        include_once('manage_prod.php');
        break;

       
        case '/manage_emp':
                $data_employee=$this->select('employee');
                include_once('manage_emp.php');
                break;

        case '/manage_feedback':
            $data_feedback=$this->select('contact');
            include_once('manage_feedback.php');
            break;
            
            case '/delete':
               if(isset($_REQUEST['delcontact_id'])){
                $contact_id=$_REQUEST['delcontact_id'];
                $where=array("contact_id"=>$contact_id);
                $res=$this->delete_where('contact',$where);
                if($res){
                    echo "
                        <script>
                        alert('deleted data');
                        window.location='manage_feedback';
                        </script>
                        ";
                }
            }
                if(isset($_REQUEST['delcustomers_id'])){
                    $uid=$_REQUEST['delcustomers_id'];
                    $where=array("uid"=>$uid);
                    $res=$this->delete_where('customers',$where);
                    if($res){
                        echo"
                        <script>
                        alert('deleted data');
                        window.location='manage_cust';
                        </script>
                        ";
                    }
                }
                if(isset($_REQUEST['delcategory_id'])){
                    $id=$_REQUEST['delcategory_id'];
                    $where=array("id"=>$id);
                    $res=$this->delete_where('category',$where);
                    if($res){
                        echo"
                        <script>
                        alert('deleted data');
                        window.location='manage_cate';
                        </script>
                        ";
                    }
                }
                    if(isset($_REQUEST['delproduct_id'])){
                        $id=$_REQUEST['delproduct_id'];
                        $where=array("id"=>$id);
                        $res=$this->delete_where('products',$where);
                        if($res){
                            echo"
                            <script>
                            alert('deleted data');
                            window.location='manage_prod';
                            </script>
                            ";
                        }
                }
                if(isset($_REQUEST['delemployee_id'])){
                    $emp_id
                    =$_REQUEST['delemployee_id'];
                    $where=array("emp_id"=>$emp_id);
                    $res=$this->delete_where('employee',$where);
                    if($res){
                        echo"
                        <script>
                        alert('deleted data');
                        window.location='manage_emp';
                        </script>
                        ";
                    }
            }

                
               
                break;

                case '/profile':
                    
                    $where=array("admin_id"=>$_SESSION['admin_id']);
                    $res=$this->select_where('admin',$where);
                    
                    $fetch=$res->fetch_object();
                    include_once('profile.php');
                    break;

                    case '/status':
                           if(isset($_REQUEST['statusuid'])){
                            $uid=$_REQUEST['statusuid'];
                            
                            $where=array("uid"=>$uid);
                            //get status
                            $run=$this->select_where('customers',$where);
                            
                            $fetch=$run->fetch_object();
                            $Status=$fetch->Status;

                            if($Status=="Block")

                            {
                                $arr=array("Status"=>"Unblock");
                                $res=$this->update('customers',$arr,$where);
                                if($res){
                                    echo"<script>
                                    alert('Unblock success');
                                    window.location='manage_cust';
                                    </script>
                                    ";
                                }
                            }
                            else{

                                $arr=array("Status"=>"Block");
                                $res=$this->update('customers',$arr,$where);
                                if($res){
                                    unset($_SESSION['user']);
                                    unset($_SESSION['name']);
                                    unset($_SESSION['uid']);

                                    echo"<script>
                                    alert('block success');
                                    window.location='manage_cust';
                                    </script>
                                    ";
                                }
                            }
                           }
                           
                           break;
                           case '/status1':
                            if(isset($_REQUEST['statusemp_id'])){
                             $emp_id=$_REQUEST['statusemp_id'];
                             
                             $where=array("emp_id"=>$emp_id);
                             //get status
                             $run=$this->select_where('employee',$where);
                             
                             $fetch=$run->fetch_object();
                             $Status=$fetch->Status;
 
                             if($Status=="Block")
 
                             {
                                 $arr=array("Status"=>"Unblock");
                                 $res=$this->update('employee',$arr,$where);
                                 if($res){
                                     echo"<script>
                                     alert('Unblock success');
                                     window.location='manage_emp';
                                     </script>
                                     ";
                                 }
                             }
                             else{
 
                                 $arr=array("Status"=>"Block");
                                 $res=$this->update('employee',$arr,$where);
                                 if($res){
                                    //  unset($_SESSION['user']);
                                    //  unset($_SESSION['name']);
                                    //  unset($_SESSION['uid']);
 
                                     echo"<script>
                                     alert('block success');
                                     window.location='manage_emp';
                                     </script>
                                     ";
                                 }
                             }
                            }
                            
                            break;
         
        

                           
                       


        default:
        include_once('pagenotfound.php');
        break;
    }
}
}
$obj=new control;
?>