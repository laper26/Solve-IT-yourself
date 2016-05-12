<?php

require 'includes.php';

$pageDataArray = [
    'title' => 'Polish VET',
    'main' => file_get_contents('templates/dropdown/polish-vet/index.html'),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
