<?php
$a = 7;
$b = 7;
$c = 365;
$d = 488;

echo "Максимальное число из четырёх: ";

if ($a > $b && $a > $c && $a > $d) {
    echo $a;
} else if ($b > $a && $b > $c && $b > $d) {
    echo $b;
} else if ($c > $a && $c > $b && $c > $d) {
    echo $c;
} else {
    echo $d;
}