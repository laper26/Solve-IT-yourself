<?php

require 'includes.php';

$pageDataArray = [
    'title' => 'German VET',
    'main' => file_get_contents('templates/dropdown/german-vet/index.html'),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
