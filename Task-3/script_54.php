<?php

$student=array(array("id"=>"1",
    "name"=>"Yuvraj",
    "class"=>"bachelor",),array("id"=>"2",
    "name"=>"milan",
    "class"=>"master",),array("id"=>"3",
    "name"=>"raj",
    "class"=>"phd",)
);

$result=array_column($student, "name");

print_r($result);

?>