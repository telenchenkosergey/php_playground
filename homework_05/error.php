<?php
    require_once "script.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
</head>
<body>
    <div>
        <p><?=$error;?></p>
        <a href="index.php">На главную</a>
    </div>
</body>
</html>