<?php

/*
 * Complete the 'countingSort' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function countingSort($arr) {
    // Write your code here
    $f = array_fill(0, 100, 0);
    for($i = 0; $i < count($arr); $i++){
        $f[$arr[$i]] += 1;
    }
    $result = [];
    for($j = 0; $j < count($f); $j++){
        for($k = 0; $k < $f[$j]; $k++){
            array_push($result, $j);
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = countingSort($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
