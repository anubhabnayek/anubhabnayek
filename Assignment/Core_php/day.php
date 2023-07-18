<?php
function findthursday($week){
switch($week){
case 'Monday':
echo"Thursday is not in the week";
break;
case 'Tuesday':
echo"Thursday is not in the week";
break;
case 'Wednesday':
echo"Thursday is not in the week";
break;
case 'Thursday':
echo "Thursday is prasent in the week";
break;
case 'Friday':
echo "Thrusday is not in the week";
break;
default:
echo "Not vailed";
break;

}
}
$week='Thursday';
findthursday($week);
?>