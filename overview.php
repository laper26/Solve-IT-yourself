<?php

require 'includes.php';

$pageDataArray = [
    'title' => 'Overview',
    'main' => file_get_contents('templates/dropdown/overview/index.html'),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
