<?php

/*
 * Complete the 'beautifulBinaryString' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING b as parameter.
 */

function beautifulBinaryString($b) {
    // Write your code here
    $result = 0;
    $arr = str_split($b); 
    for($i = 0; $i < count($arr) - 2; $i++){
        if($arr[$i] == 0 && $arr[$i + 1] == 1 && $arr[$i + 2] == 0){
            $result += 1;
            $i += 2;
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$b = rtrim(fgets(STDIN), "\r\n");

$result = beautifulBinaryString($b);

fwrite($fptr, $result . "\n");

fclose($fptr);
