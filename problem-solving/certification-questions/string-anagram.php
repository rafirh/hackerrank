<?php



/*
 * Complete the 'stringAnagram' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. STRING_ARRAY dictionary
 *  2. STRING_ARRAY query
 */

function stringAnagram($dictionary, $query) {
    // Write your code here
    for($i = 0; $i < count($dictionary); $i++){
        $arr = str_split($dictionary[$i]);
        sort($arr);
        $dictionary[$i] = join("", $arr);
    }
    $count = array_count_values($dictionary);
    $result = [];
    for($j = 0; $j < count($query); $j++){
        $arr = str_split($query[$j]);
        sort($arr);
        $query[$j] = join("", $arr);
        if(isset($count[$query[$j]])){
            array_push($result, $count[$query[$j]]);
        }else{
            array_push($result, 0);
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$dictionary_count = intval(trim(fgets(STDIN)));

$dictionary = array();

for ($i = 0; $i < $dictionary_count; $i++) {
    $dictionary_item = rtrim(fgets(STDIN), "\r\n");
    $dictionary[] = $dictionary_item;
}

$query_count = intval(trim(fgets(STDIN)));

$query = array();

for ($i = 0; $i < $query_count; $i++) {
    $query_item = rtrim(fgets(STDIN), "\r\n");
    $query[] = $query_item;
}

$result = stringAnagram($dictionary, $query);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
