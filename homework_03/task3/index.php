<?php
$myArr = [
    [1, 20, 0, 41],
    [5, -43, 7, 10],
    [9, 10, 11, 0],
    [34, 8, 97, 12],
    [11, 21, 31, 41],
];

for ($i = 0; $i < count($myArr[$i]); $i++) {
    $newArr = [];
    for ($j = 0; $j < count($myArr); $j++) {
        array_push($newArr, $myArr[$j][$i]);
    }
    if (!in_array(0, $newArr)) {
        echo "$i : ";
        echo array_product($newArr);
        echo "<br>";
    }
}