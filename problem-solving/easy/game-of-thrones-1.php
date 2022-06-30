<?php

/*
 * Complete the 'gameOfThrones' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function gameOfThrones($s) {
    // Write your code here
    $s = str_split($s);
    $t = false;
    if(count($s) % 2 == 0){
        $t = true;
    }
    $count = array_count_values($s);
    $unique = array_unique($s);
    sort($unique);
    if($t){
        for($i = 0; $i < count($unique); $i++){
            if($count[$unique[$i]] % 2 != 0){
                return "NO";
            }
        }
        return "YES";
    }else{
        $odd = 0;
        for($i = 0; $i < count($unique); $i++){
            if($count[$unique[$i]] % 2 != 0){
                $odd += 1;
            }
        }
        if($odd == 1){
            return "YES";
        }
        return "NO";
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = gameOfThrones($s);

fwrite($fptr, $result . "\n");

fclose($fptr);