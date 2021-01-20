<?php

function printPairs($arr,$n,$sum)
{
    for($i=0;$i<$n;$i++)
    for($j=$i+1;$j<$n;$j++)
     if($arr[$i] + $arr[$j] == $sum)
       echo "(". $arr[$i]. ", ". $arr[$j]. ")". "\n";
}
 
$arr=array(1,5,7,-1,7);
$n=0;
while(!empty($arr[$n]))
 $n++;
$sum=6;
printPairs($arr,$n,$sum);
 
?>