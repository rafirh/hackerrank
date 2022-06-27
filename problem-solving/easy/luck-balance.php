<?php

/*
 * Complete the 'luckBalance' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. 2D_INTEGER_ARRAY contests
 */

function luckBalance($k, $contests) {
    // Write your code here
    rsort($contests);
    $result = 0;
    for($i = 0; $i < count($contests); $i++){
        if($k > 0 and $contests[$i][1] == 1){
            $k -= 1;
            $result += $contests[$i][0];
        }else if($contests[$i][1] == 0){
            $result += $contests[$i][0];
        }else{
            $result -= $contests[$i][0];
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$contests = array();

for ($i = 0; $i < $n; $i++) {
    $contests_temp = rtrim(fgets(STDIN));

    $contests[] = array_map('intval', preg_split('/ /', $contests_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = luckBalance($k, $contests);

fwrite($fptr, $result . "\n");

fclose($fptr);
