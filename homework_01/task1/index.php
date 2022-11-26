<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $x = -5;
    
    if ($x > 0) {
        $color = "green";
    } else if ($x < 0) {
        $color = "red";
    } else {
        $color = "yellow";
    }
    ?>

    <p class="<?=$color?>"><?=$x?></p>
</body>
</html>