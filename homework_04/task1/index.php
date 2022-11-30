<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergey Telenchenko</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $text = 
    'What is Symfony. Symfony is a set of PHP Components, a Web Application framework, a Philosophy, and a Community - all working together in harmony.
    Symfony Framework. The leading PHP framework to create websites and web applications. Built on top of the Symfony Components.
    Symfony Components. A set of decoupled and reusable components on which the best PHP applications are built, such as Drupal, phpBB, and eZ Publish.
    Symfony Community. A passionate group of over 600,000 developers from more than 120 countries, all committed to helping PHP surpass the impossible.
    Symfony Philosophy. Embracing and promoting professionalism, best practices, standardization and interoperability of applications.';

    $searchingString = "Symfony";
    $coloredText = str_replace($searchingString, "<span class='color'>$searchingString</span>", $text);

    echo "<p>$coloredText</p>";

    echo "<p>Подстрока \"$searchingString\" встречается в тексте " . substr_count($text, $searchingString) . " раз.</p>";
?>
</body>
</html>