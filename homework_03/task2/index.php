<?php
$myArr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$evenArr = [];
$oddArr = [];

foreach ($myArr as $i) {
    $index = array_search($i, $myArr);
    if ($index % 2 == 0) {
        array_push($evenArr, $i);
    } else {
        array_push($oddArr, $i);
    }     
}

$myArr = array_merge($oddArr, $evenArr);
print_r($myArr);