<?php
$startyear=1901;
$endyear=2016;
echo"Leap year between $startyear and $endyear:<br>";
for($year=$startyear;$year<=$endyear;$year++){
    if($year%4==0){
        if($year%100==0){
            if($year%400){
                echo $year."<br>";
            }
        }else{
      
            echo $year."<br>";
        }
        }
    }



?>