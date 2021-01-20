<?php
  
$arr = array(1,2,3,4,5,6,7,7,8,9,10);  

$i=0;
while(!empty($arr[$i]))
 $i++;
   
for($j=0;$j<$i;$j++) {  
    for($k=$j+1;$k<$i;$k++) {  
        if($arr[$j] == $arr[$k])  
            echo "Duplicate elements in array:". $arr[$k]."<br>";  
    }  
}  
?>  



