<?php

/*
 * Complete the 'separateNumbers' function below.
 *
 * The function accepts STRING s as parameter.
 */
function count_digit($number) {
    return strlen((string) $number);
}

function separateNumbers($s) {
    $arr = array_map('intval', str_split($s));
    $i = 1;
    $stop = false;
    $result = '';
    while(true){
        $n = join(array_slice($arr, 0, $i));
        $nn = $n;
        $j = $i;
        while(true){
            $nn++;
            $c = count_digit($nn);
            if($nn == join(array_slice($arr, $j, $c))){
                if($j + $c == count($arr)){
                    $result = 'YES ' . $n;
                    $stop = true;
                    break;
                }
            }else{
                if($i + $j > count($arr)){
                    $result = 'NO';
                    $stop = true;
                }
                break;
            }
            $j += $c;
        }
        if($stop){
            break;
        }
        $i++;
    }
    print($result . "\n");
}

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    separateNumbers($s);
}
