<?php

require 'includes.php';

$pageDataArray = [
    'header' => parseTemplate('templates/header.html', []),
    'footer' => parseTemplate('templates/footer.html', []),
    'title' => 'Polish VET',
    'main' => parseTemplate('templates/dropdown/polish-vet/index.html', []),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
