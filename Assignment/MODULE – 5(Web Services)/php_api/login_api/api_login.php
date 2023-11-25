<?php


header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require_once("dbconnection.php");
$data = json_decode(file_get_contents("php://input"), true);
$unm ="admin"; //$data['unm'];
$password =md5("1234");//$data['password'];

 $sel="SELECT * FROM student WHERE unm='".$unm."' AND password='".$password."'";
$res=mysqli_query($conn,$sel);
$count=mysqli_num_rows($res);

if ($count> 0) {
    echo json_encode(array("message" => "login success", "status" => true));
} else {
    echo json_encode(array("message" => "login fail", "status" => false));
}

?>

