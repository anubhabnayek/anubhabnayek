<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$sid = $data["id"];
$name = $data["name"];
$email =  $data["email"];
$unm =  $data["unm"];
$phone =  $data["phone"];
include('dbconnection.php');

$query = "UPDATE `student` SET `name`='".$name."',`email`='".$email."',
`unm`='".$unm."',`phone`='".$phone."' WHERE id='".$sid."' ";

if(mysqli_query($conn, $query) or die("Update Query Failed"))
{	
	echo json_encode(array("message" => "Data Update Successfully", "status" => true));	
}
else
{	
	echo json_encode(array("message" => "Failed Data Not Updated", "status" => false));	
}	

?>