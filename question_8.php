<?php
echo "Enter The Number (a)";
$handle = fopen("php://stdin", "r");
$a = intval(trim(fgets($handle)));

echo "Enter The Number (b)";
$b = intval(trim(fgets($handle)));

$temp = $a;
$a = $b;
$b = $temp;

echo "After Swapping";
echo "a = $a\n";
echo "b = $b\n";
?>