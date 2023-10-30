<?php

$person=array(array("name"=>"Yuvraj","age"=>"22","email"=>"uv23@gmail.com",),
			  array("name"=>"Rahul","age"=>"21","email"=>"rahul@gmail.com",),
			  array("name"=>"Vidhey","age"=>"20","email"=>"v=VD3@gmail.com",),
			  array("name"=>"Harsh","age"=>"19","email"=>"harshratho@gmail.com",),);

$age=array_column($person, "age");

print_r($age);	

?>