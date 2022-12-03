<?php
require_once "text.php";

$textArr = explode("\r\n", $text);
$postsCount = count($textArr);
$postsPerPage = 5;
$pages = ceil($postsCount / $postsPerPage);
if ($pages == 0) {
    $pages = 1;
}

$page = isset($_GET["page"]) ? intval($_GET["page"]) : 1;
if ($page < 1 || $page > $pages) {
    $error = "Запрошенная страница не существует";
    include "error.php";
    exit();
}

$firstPage = ($page - 1) * $postsPerPage;
$pageData = array_slice($textArr, $firstPage, $postsPerPage);