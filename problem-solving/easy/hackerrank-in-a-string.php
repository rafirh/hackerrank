<?php

/*
 * Complete the 'hackerrankInString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function hackerrankInString($s) {
    // Write your code here
    // array_slice($arr, index start)
    $h = str_split("hackerrank");
    $arr = str_split($s);
    $result = 0;
    for($i = 0; $i < count($h); $i++){
        $n = array_search($h[$i], $arr);
        if($n > -1){
            $result += 1;
            $arr = array_slice($arr, $n+1);
            if($result == count($h)){
                return "YES";
                break;
            }
        }else{
            return "NO";
        }
    }
    
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    $result = hackerrankInString($s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
