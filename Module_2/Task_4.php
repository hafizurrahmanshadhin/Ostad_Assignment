<?php 
function printFibonacci($num_terms) {
    $n1 = 0;
    $n2 = 1;

    echo "The first $num_terms Fibonacci numbers: ";

    if ($num_terms >= 1) {
        echo $n1 . ' ';
    }

    if ($num_terms >= 2) {
        echo $n2 . ' ';
    }

    for ($i = 3; $i <= $num_terms; $i++) {
        $n3 = $n1 + $n2;
        echo $n3 . ' ';

        $n1 = $n2;
        $n2 = $n3;
    }
}

printFibonacci(15);
