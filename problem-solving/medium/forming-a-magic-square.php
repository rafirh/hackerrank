<?php

/*
 * Complete the 'formingMagicSquare' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY s as parameter.
 */

function formingMagicSquare($s)
{
    // Write your code here
    $sr = [
        [[8, 3, 4], [1, 5, 9], [6, 7, 2]],
        [[6, 1, 8], [7, 5, 3], [2, 9, 4]],
        [[2, 7, 6], [9, 5, 1], [4, 3, 8]],
        [[4, 9, 2], [3, 5, 7], [8, 1, 6]],
        [[8, 1, 6], [3, 5, 7], [4, 9, 2]],
        [[2, 9, 4], [7, 5, 3], [6, 1, 8]],
        [[6, 7, 2], [1, 5, 9], [8, 3, 4]],
        [[4, 3, 8], [9, 5, 1], [2, 7, 6]]
    ];
    $result = array();
    for ($f = 0; $f < count($sr); $f++) {
        $r = 0;
        for ($i = 0; $i < count($sr[0]); $i++) {
            for ($j = 0; $j < count($sr[0][0]); $j++) {
                if ($s[$i][$j] != $sr[$f][$i][$j]) {
                    $r += abs($sr[$f][$i][$j] - $s[$i][$j]);
                }
            }
        }
        array_push($result, $r);
    }
    return min($result);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = array();

for ($i = 0; $i < 3; $i++) {
    $s_temp = rtrim(fgets(STDIN));

    $s[] = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = formingMagicSquare($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
