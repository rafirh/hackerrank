<?php

/*
 * Complete the 'maximizingXor' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER l
 *  2. INTEGER r
 */

function maximizingXor($l, $r) {
    // Write your code here
    $result1 = 0;
    for($a = $l; $a <= $r; $a++){
        for($b = $l; $b <= $r; $b++){
            $b1 = str_split(decbin($a));
            $b2 = str_split(decbin($b));
            $diff = count($b2) - count($b1);
            $result = array_fill(0, count($b2), 0);
            for($i = 0; $i < $diff; $i++){
                array_unshift($b1, 0);
            }
            for($j = 0; $j < count($b2); $j++){
                if($b1[$j] != $b2[$j]){
                    $result[$j] = 1;
                }
            }
            if($result1 < bindec(join($result))){
                $result1 = bindec(join($result));
            }
        }
    }
    return $result1;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$l = intval(trim(fgets(STDIN)));

$r = intval(trim(fgets(STDIN)));

$result = maximizingXor($l, $r);

fwrite($fptr, $result . "\n");

fclose($fptr);
