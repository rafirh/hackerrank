<?php

/*
 * Complete the 'gridChallenge' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING_ARRAY grid as parameter.
 */

function gridChallenge($grid) {
    // Write your code here
    for($k = 0; $k < count($grid); $k++){
        $a = str_split($grid[$k]);
        sort($a);
        $grid[$k] = $a;
    }
    for($i = 0; $i < count($grid[0]); $i++){
        $array = [];
        for($j = 0; $j < count($grid); $j++){
            array_push($array, $grid[$j][$i]);
        }
        $array2 = $array;
        sort($array2);
        if(join($array2) != join($array)){
            return "NO";
        }
    }
    return "YES";
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $grid = array();

    for ($i = 0; $i < $n; $i++) {
        $grid_item = rtrim(fgets(STDIN), "\r\n");
        $grid[] = $grid_item;
    }

    $result = gridChallenge($grid);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
