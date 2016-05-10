<?php

require 'includes.php';

$pageDataArray = [
    'header' => parseTemplate('templates/header.html', []),
    'footer' => parseTemplate('templates/footer.html', []),
    'title' => 'German VET',
    'main' => parseTemplate('templates/dropdown/german-vet/index.html', []),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
