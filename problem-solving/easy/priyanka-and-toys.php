<?php

/*
 * Complete the 'toys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY w as parameter.
 */

function toys($w) {
    // Write your code here
    sort($w);
    $limit = -1;
    $result = 0;
    for($i = 0; $i < count($w); $i++){
        if($w[$i] > $limit){
            $result += 1;
            $limit = $w[$i] + 4;
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$w_temp = rtrim(fgets(STDIN));

$w = array_map('intval', preg_split('/ /', $w_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = toys($w);

fwrite($fptr, $result . "\n");

fclose($fptr);
