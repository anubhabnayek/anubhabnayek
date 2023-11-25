<?php
include('dbconnection.php');
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data_arr= json_decode(file_get_contents("php://input"),true);
$name=$data_arr['name'];
$email=$data_arr['email'];
$unm=$data_arr['unm'];
$password=md5($data_arr['password']);
$phone=$data_arr['phone'];
$sel="select 'unm'from student where unm='".$unm."'";
$res=mysqli_query($conn,$sel);
$count=mysqli_num_rows($res);
if($count>0){
    echo json_encode(array("message"=>"username already exits","status"=>false));
}
else{
   $sel="INSERT INTO `student`(`name`, `email`, `unm`, `password`, `phone`)
    VALUES ('".$name."','".$email."','".$unm."','".$password."','".$phone."')";
    if(mysqli_query($conn,$sel)or die("insert failed")){
        echo json_encode(array("messge"=>"student register success","status"=>true));
    }else{
        echo json_encode(array("messge"=>" fail user not  register ","status"=>false));
    
    }
}
   
?>