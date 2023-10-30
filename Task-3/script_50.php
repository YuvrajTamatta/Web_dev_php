<?php

function even($num){
    if($num % 2==0){
        return true;
    }

}

$numbers=array(1,2,3,4,5,6,7,8,9,10);

$result=array_filter($numbers, "even");

print_r($result);

?>