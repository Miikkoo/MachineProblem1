<?php

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

function test($assocArr){
  foreach( $assocArr as $key=>$value ){
    echo 'Key = ' . $key . ', ' . 'Value = ' . $value;
  }
}

test($age);

?>


