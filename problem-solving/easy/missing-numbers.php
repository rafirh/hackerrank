<?php

/*
 * Complete the 'missingNumbers' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY arr
 *  2. INTEGER_ARRAY brr
 */

function missingNumbers($arr, $brr) {
    // Write your code here
    $a1 = array_unique($arr);
    $a2 = array_unique($brr);
    $count1 = array_count_values($arr);
    $count2 = array_count_values($brr);
    sort($a1);
    sort($a2);
    $result = [];
    for($i = 0; $i < count($a2); $i++){
        if(!in_array($a2[$i], $a1) || $count1[$a2[$i]] != $count2[$a2[$i]]){
            array_push($result, $a2[$i]);
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$m = intval(trim(fgets(STDIN)));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = missingNumbers($arr, $brr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
