<?php
// Using For Loop
function printEvenNumbersForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        printf("%d", $i+1);
        if ($i != $end-1) {
            echo ', ';
        }
    }
}
echo "Using For Loop: ";
printEvenNumbersForLoop(1, 20, 2);
printf("\n\n");


// Using While Loop
function printEvenNumbersWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        printf("%d", $i+1);
        if ($i != $end-1) {
            echo ', ';
        }
        $i += $step;
    }
}
echo "Using While Loop: ";
printEvenNumbersWhileLoop(1, 20, 2);
printf("\n\n");


// Using Do While Loop
function printEvenNumbersDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        printf("%d", $i+1);
        if ($i != $end-1) {
            echo ', ';
        }
        $i += $step;
    } while ($i <= $end);
}
echo "Using Do While Loop: ";
printEvenNumbersDoWhileLoop(1, 20, 2);
