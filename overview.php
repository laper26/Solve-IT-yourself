<?php

require 'includes.php';

$pageDataArray = [
    'header' => parseTemplate('templates/header.html', []),
    'footer' => parseTemplate('templates/footer.html', []),
    'title' => 'Overview',
    'main' => parseTemplate('templates/dropdown/overview/index.html', []),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
