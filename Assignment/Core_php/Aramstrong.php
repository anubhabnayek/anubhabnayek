<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<div class="container">
<div class="col-xs-12 col-md-6">
   <form action="" method="post">
   <label>Aramstrong Number</label>
   <input type="number" name="number" value="aramstrong_number"><br><br>
   <input type="submit" name="submit" value="submit">
   </div>
   </div>
   </form>
<?php
if(isset($_POST['submit'])){
 $number=$_POST['number'];
 $total=0;
 $x=$number;
 while($x>0){
    $rem=$x%10;
    $total=$total+$rem*$rem*$rem;
    $x=$x/10;
 }

 if($number == $total)
 {
    echo"yes it is Aramstrong number";
 }
 else{
    echo"No it is hot an aramstrong number";
 }
}
?>
<!--write a program to print to print the below format:
   5 9
   2610
   3711
   4812  -->
   <?php
   
   ?>
</body>
</html>


   