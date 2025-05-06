<?php
echo "Enter a number: ";
$handle = fopen("php://stdin", "r");
$num = fgets($handle);
$num = trim($num);
$sqr = $num * $num;
echo $sqr;
?>