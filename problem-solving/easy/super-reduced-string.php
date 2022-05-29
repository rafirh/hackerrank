<?php

/*
 * Complete the 'superReducedString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function superReducedString($s) {
    // Write your code here
    $array = str_split($s);
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == $array[$i + 1]){
            array_splice($array, $i, 2);
            $i = -1;
        }
        if(count($array) == $i + 1){
            break;
        }
    }
    if(count($array) == 0){
        return "Empty String";
    }else{
        return implode("", $array);
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = superReducedString($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
