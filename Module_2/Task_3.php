<?php

$num = 0;
$n1 = 0;
$n2 = 1;
echo "Fibonacci series for first 10 numbers: ";
echo $n1 . ' ' . $n2 . ' ';

for ($num = 2; $num < 10; $num++) {
    $n3 = $n1 + $n2;

    if ($n3 > 100) {
        break;
    }

    echo $n3 . ' ';
    $n1 = $n2;
    $n2 = $n3;
}
