<?php

/*
 * Complete the 'flippingBits' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter.
 */

function flippingBits($n) {
    // Write your code here
    $bin = str_split(decbin($n));
    $length = count($bin);
    for($i = 0; $i < 32 - $length; $i++){
        array_unshift($bin, 0);
    }
    for($j = 0; $j < count($bin); $j++){
        if($bin[$j] == 1){
            $bin[$j] = 0;
        }else{
            $bin[$j] = 1;
        }
    }
    return bindec(join($bin));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $result = flippingBits($n);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
