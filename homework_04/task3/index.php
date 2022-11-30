<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergey Telenchenko</title>
</head>
<body>
    <?php
    $text = 
    'What is Symfony. Symfony is a set of PHP Components, a Web Application framework, a Philosophy, and a Community - all working together in harmony.
    Symfony Framework. The leading PHP framework to create websites and web applications. Built on top of the Symfony Components.
    Symfony Components. A set of decoupled and reusable components on which the best PHP applications are built, such as Drupal, phpBB, and eZ Publish.
    Symfony Community. A passionate group of over 600,000 developers from more than 120 countries, all committed to helping PHP surpass the impossible.
    Symfony Philosophy. Embracing and promoting professionalism, best practices, standardization and interoperability of applications.';
    $textArr = str_word_count($text, 1);
    $maxArr = [];
    $max = $textArr[0];
    // Проходимся по массиву, узнаем максимальную длину
    foreach ($textArr as $word) {
        if (strlen($word) > strlen($max)) {
            $max = $word;
        }
    }
    // Проходимся по массиву и добавляем элементы 
    // с такой же длиной в массив с макс. значением длины
    foreach ($textArr as $word) {
        if (strlen($word) == strlen($max)) {
            array_push($maxArr, $word);
        }
    }
    // Выводим элементы
    foreach ($maxArr as $word) {
        echo $word . "<br>";
    }
    ?>
</body>
</html>