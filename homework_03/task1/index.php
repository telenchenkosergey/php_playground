<?php
$myArr = [55, 1, 6, 7, 12, 56, 3, 2, 3, 14, -21, -22, 34];
$maxValue = max($myArr);
$minValue = min($myArr);

$imax = array_search($maxValue ,$myArr);
$imin = array_search($minValue, $myArr);

if (abs($imax - $imin) == 1) {
    echo "Произведение не может быть вычислено";
} else {
    if ($imin < $imax) {
        $newArr = array_slice($myArr, $imin+1, $imax-$imin-1);
        echo array_product($newArr);
    } else {
        $newArr = array_slice($myArr, $imax+1, $imin-$imax-1);
        echo array_product($newArr);
    }
}