<?php

function cube($n)
{
    return($n * $n * $n);
}
$number=array(1,2,3,4,5);


// eg----cube= 3*3*3 = 3*3=9 *3 =27
$result=array_map("cube", $number);

print_r($result);
?>

