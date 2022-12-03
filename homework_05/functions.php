<?php
function get_statistics(string $text): string {
    $sentenceCount = mb_substr_count($text, ".");
    $wordCount = mb_substr_count($text, " ");
    $symbolCount = mb_strlen($text);
    return "Символов: $symbolCount Слов: $wordCount Предложений: $sentenceCount";
}

function change_color(string $text, string $word) {
    str_replace($word, "<span class=\"color\">$word</span>", $text);
}