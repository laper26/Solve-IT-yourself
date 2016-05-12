<?php

require 'includes.php';

$pageDataArray = [
    'header' => file_get_contents('templates/header.html'),
    'footer' => file_get_contents('templates/footer.html'),
    'title' => 'Overview',
    'main' => file_get_contents('templates/dropdown/overview/index.html'),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
