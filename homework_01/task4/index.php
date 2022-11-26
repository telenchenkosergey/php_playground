<?php
// Длина сумки
$a = 30;
// Глубина сумки
$b = 20;
// Высота сумки
$c = 60;

// Определяем максимальный размер сумки
if ($a > $b) {
    if ($a > $c) {
        $bagMaxDimension = $a;
    } else {
        $bagMaxDimension = $c;
    }  
} else {
    if ($b > $c) {
        $bagMaxDimension = $b;
    } else {
        $bagMaxDimension = $c;
    }
}

// Определяем минимальный размер сумки
if ($a < $b) {
    if ($a < $c) {
        $bagMinDimension = $a;
    } else {
        $bagMinDimension = $c;
    }  
} else {
    if ($b < $c) {
        $bagMinDimension = $b;
    } else {
        $bagMinDimension = $c;
    }
}

// Определяем средний размер сумки
if ($a < $b && $b < $c) {
    $bagMidDimension = $b;
} else if ($b < $a && $a < $c) {
    $bagMidDimension = $a;
} else {
    $bagMidDimension = $c;
}

echo "Минимальный размер сумки: $bagMinDimension<br>";
echo "Средний размер сумки: $bagMidDimension<br>";
echo "Максимальный размер сумки: $bagMaxDimension<br>";
echo "<br>";

// Длина товара
$length = 10;
// Глубина товара
$width = 60;
// Высота товара
$height = 30;

// Определяем максимальный размер товара
if ($length > $width) {
    if ($length > $height) {
        $itemMaxDimension = $length;
    } else {
        $itemMaxDimension = $height;
    }  
} else {
    if ($width > $height) {
        $itemMaxDimension = $width;
    } else {
        $itemMaxDimension = $height;
    }
}

// Определяем минимальный размер товара
if ($length < $width) {
    if ($length < $height) {
        $itemMinDimension = $length;
    } else {
        $itemMinDimension = $height;
    }  
} else {
    if ($width < $height) {
        $itemMinDimension = $width;
    } else {
        $itemMinDimension = $height;
    }
}

// Определяем средний размер товара
if ($length < $height && $height < $width) {
    $itemMidDimension = $height;
} else if ($height < $width && $width < $length) {
    $itemMidDimension = $width;
} else {
    $itemMidDimension = $length;
}

echo "Минимальный размер товара: $itemMinDimension<br>";
echo "Средний размер товара: $itemMidDimension<br>";
echo "Максимальный размер товара: $itemMaxDimension<br>";
echo "<br>";

if ($bagMinDimension >= $itemMinDimension && $bagMaxDimension >= $itemMaxDimension && $bagMidDimension >= $itemMidDimension) {
    echo "Товар поместится в сумку";
} else {
    echo "Товар не поместится в сумку";
}