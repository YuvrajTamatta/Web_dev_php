<?php

function myfunction($v1,$v2){
    return $v1 . "-" . $v2;
}
$a=array("dog", "cat", "horse");
print_r(array_reduce($a,"myfunction"));

?>