<?php
$myArr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 1, 2];
$evenArr = [];
$oddArr = [];

for ($i = 0; $i < count($myArr); $i++) {
    if ($i % 2 == 0) {
        array_push($evenArr, $myArr[$i]);
    } else {
        array_push($oddArr, $myArr[$i]);
    }     
}

$myArr = array_merge($oddArr, $evenArr);
print_r($myArr);