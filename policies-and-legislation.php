<?php

require 'includes.php';

$pageDataArray = [
    'header' => file_get_contents('templates/header.html'),
    'footer' => file_get_contents('templates/footer.html'),
    'title' => 'Policies and Legislation',
    'main' => file_get_contents('templates/policies-and-legislation/index.html'),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
