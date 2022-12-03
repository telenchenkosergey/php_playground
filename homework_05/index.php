<?php
require_once "text.php";
require_once "script.php";
require_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergey Telenchenko</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Страница <?=$page?></h1>
    <div>
        <?php
            foreach ($pageData as $post) {
                echo "<div>$post</div>" . "<br>";
                change_color($post, "Jay");
                echo get_statistics($post);
                echo "<hr>";
            }
        ?>
    </div>
    <div>
        <?php
            for ($i = 1; $i <= $pages; $i++) {
                if ($i == $page) {
                    echo "$i";
                } else {
            ?>
            <a href="index.php?page=<?=$i?>"><?=$i?></a>
            <?php      
                }
            }
            ?>
    </div>
</body>
</html>