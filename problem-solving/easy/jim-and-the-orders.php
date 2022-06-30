<?php

/*
 * Complete the 'jimOrders' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts 2D_INTEGER_ARRAY orders as parameter.
 */

function jimOrders($orders) {
    // Write your code here
    $st = [];
    $result = [];
    for($i = 0; $i < count($orders); $i++){
        array_push($st, $orders[$i][0] + $orders[$i][1]);
    }
    $length = count($st);
    for($i = 0; $i < $length; $i++){
        $index = array_search(min($st), $st);
        array_push($result, $index + 1);
        unset($st[$index]);
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$orders = array();

for ($i = 0; $i < $n; $i++) {
    $orders_temp = rtrim(fgets(STDIN));

    $orders[] = array_map('intval', preg_split('/ /', $orders_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = jimOrders($orders);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
