<?php

$a=array(1,2,3,4,5);
$b=array(6,7,8,9,10);
array_splice($a,0,2,$b);
print_r($a);

?>