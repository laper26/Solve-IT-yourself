<?php

require 'includes.php';

$pageDataArray = [
    'header' => parseTemplate('templates/header.html', []),
    'footer' => parseTemplate('templates/footer.html', []),
    'title' => 'Policies and legislation',
    'main' => parseTemplate('templates/policies-and-legislation/index.html', []),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
