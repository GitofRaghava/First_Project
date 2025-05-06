<?php

echo "Enter Your First Name: ";
$handle = fopen("php://stdin", "r");
$f_name = trim(fgets($handle));

echo "Enter Your Last Name: ";
$handle = fopen("php://stdin", "r");
%l_name = trim(fgets($handle));

$full_name = $f_name . " ". $l_name;
echo $full_name;
?>