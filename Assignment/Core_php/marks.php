<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate parsentage and grade</title>
</head>
<body>
    <h1>Enter marks five subject</h1>
        <form method="post" action="">
        <label for="physics">Physics:</label>
        <input type="number"name="physics" required><br>
        <br>
        <label for="chemistry">Chemistry:</label>
        <input type="number"name="chemistry" required><br>
        <br>
        <label for="biology">Biology:</label> 
        <input type="number"name="biology" required><br>
        <br>
        <label for="mathematics">Mathematics:</label> 
        <input type="number"name="mathematics" required><br>
        <br>
        <label for="computer">Computer:</label> 
        <input type="number"name="computer" required><br>
        <br>
        <input type="submit"value="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    //echo"</pre>";print_r($_POST);exit;
    $physics=$_POST['physics'];
    $chemistry=$_POST['chemistry'];
    $biology=$_POST['biology'];
    $mathematics=$_POST['mathematics'];
    $computer=$_POST['computer'];
    $Totalmarks=$physics+$chemistry+$biology+$mathematics+$computer;
    $percentage=($Totalmarks/500)*100;
   
    echo"<h2>result</h2>";
    echo"physics: $physics<br>";
    echo"chemistry: $chemistry<br>";
    echo"biology: $biology<br>";
    echo"mathematics: $mathematics<br>";
    echo"computer: $computer<br>";
    echo"Totalmarks: $Totalmarks<br>";
    echo"percentage: $percentage<br>";

   if($percentage>=80){
    echo"Grade: 1st Devision";

   }
   elseif($percentage>=60){
    echo"Grade: 2nd Devision";
}
   elseif($percentage>=40){
    echo"Grade: 3rd Devision";
   }
   else{
    echo"Grade: Fail";
   }

}

?>