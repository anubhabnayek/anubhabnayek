<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$sid =$data["id"];

include('dbconnection.php');

$query = "DELETE FROM student WHERE id='".$sid."' ";

if(mysqli_query($conn, $query) or die("Delete Query Failed"))
{	
	echo json_encode(array("message" => "data Delete Successfully", "status" => true));	
}
else
{	
	echo json_encode(array("message" => "Failed data Not Deleted", "status" => false));	
}

?>