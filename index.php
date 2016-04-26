<?php

require 'includes.php';

$pageDataArray = [
    'header' => parseTemplate('templates/header.html', []),
    'footer' => parseTemplate('templates/footer.html', []),
    'title' => 'Start',
    'main' => parseTemplate('templates/index/index.html', []),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
