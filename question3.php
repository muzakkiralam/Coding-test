<?php 

$arr = array(1,1,0,0,1,0,1,0,1,1,1,1);
    $count=0; 
    $result=0;  
  
    for($i=0;$i<count($arr);$i++) 
    { 
        if($arr[$i] == 0) 
            $count=0; 
   
        else
        { 
            $count++; 
            $result =max($result,$count); 
        } 
    } 
  
    echo $result; 
  
?> 