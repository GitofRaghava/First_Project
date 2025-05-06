<?php
echo "Enter A String: ";
$handle = fopen("php://stdin", "r");
$input = trim(fgets($handle));
$no_spaces = str_replace(' ','',$input);
echo "String without spaces: $no_spaces\n";
?>