<?php

/*
 * Complete the 'stringConstruction' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function stringConstruction($s) {
    // Write your code here
    return count(array_unique(str_split($s)));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    $result = stringConstruction($s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
