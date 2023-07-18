<?php
$a=10;
$b=20;
$c=30;

$largest=($a>=$b && $a>=$c)?$a:(($b>=$a && $b>=$c)?$b:$c);
echo"The largest number is:$largest";

?>