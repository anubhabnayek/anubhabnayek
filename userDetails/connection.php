<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
    echo"";
}
else{
    echo"db not connected";
}
?>
<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";


$conn = mysqli_connect($servername, $username, $password,$dbname);


 if ($conn) {
     echo "";
 }
 else{
     echo"Db not connected";
 }

*/
?>