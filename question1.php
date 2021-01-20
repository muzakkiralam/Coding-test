<?php

$arr=array(2,3,4,5);
$sum=0;

 $i=0;
while(!empty($arr[$i]))
 $i++;

for($j=0;$j<$i;$j++)
$sum=$sum+$arr[$j];
echo $sum;

?>