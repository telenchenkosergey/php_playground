<?php
function get_statistics(string $text): string {
    $sentenceCount = mb_substr_count($text, ". ") + 1;
    $wordCount = mb_substr_count($text, " ");
    $symbolCount = mb_strlen($text);
    return "Символов: $symbolCount Слов: $wordCount Предложений: $sentenceCount";
}

function change_color(string $text, string $word): string {
    return mb_eregi_replace($word, "<span class=\"color\">$word</span>", $text);
}

function make_first_letter_bold(string $text): string {
    $textArr = explode(". ", $text);
    $result = [];
    foreach ($textArr as $e) {
        $search = mb_substr($e, 0, 1);
        $replace = "<strong>$search</strong>";
        $text = mb_ereg_replace($search, $replace, $e);
        array_push($result, $text);
    }
    $resultText = implode(". ", $result);
    return $resultText;
}