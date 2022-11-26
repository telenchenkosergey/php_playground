<?php
$a = 13;
$b = -43;
$c = 345;

if ($a < $b && $a < $c) {
    $min = $a;
} else if ($b < $a && $b < $c) {
    $min = $b;
} else {
    $min = $c;
}

if ($a > $b && $a > $c) {
    $max = $a;
} else if ($b > $a && $b > $c) {
    $max = $b;
} else {
    $max = $c;
}

echo $min + $max;
