<?php
echo "Enter The Dividend: ";
$handle = fopen("php://stdin", "r");
$dividend = intval(trim(fgets($handle)));

echo "Enter The Divisor";
$divisor = inval(trim(fgets($handle)));

if($divisor==0){
    echo "Error: Division By Zero is Not Allowed";
}
else{
    $quotient = intdiv($dividend,$divisor);
    $reminder = $dividend % $divisor;
    echo "Quotient: $quotient\n";
    echo "Remainder: $remainder\n";
}
?>