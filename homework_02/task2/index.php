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
    <?php
        $rows = 15;
        $columns = 5;
        $fontColor = 0;
        $step = 255 / ($rows - 1);
    ?>
    <table>
        <tr>
            <td>Номер</td>
            <td colspan="<?=$columns?>">Число</td>
        </tr>
        <?php
        for ($i = 1; $i <= $rows; $i++) {
            $fc = round($fontColor);
            echo "<tr style='color: rgb($fc, $fc, $fc); background-color: slategrey;'>";
            echo "<td>$i</td>";
            for ($j = 1; $j <= $columns; $j++) {
                $randNum = rand(1, 99);
                echo "<td>$randNum</td>";
            }
            echo "</tr>";
            $fontColor += $step;
        }
        ?>
    </table>
</body>
</html>