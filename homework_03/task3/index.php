<?php
$myArr = [[1, 20, 0, 41], [5, -43, 7, 10], [9, 10, 11, 0], [34, 8, 97, 12], [11, 21, 31, 41]];

foreach ($myArr as $arr) {
    if (!in_array(0, $arr)) {
        echo array_search($arr, $myArr) . " : ";
        echo array_product($arr) . "<br>";
    }
}