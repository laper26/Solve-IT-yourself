<?php

require 'includes.php';

$pageDataArray = [
    'title' => 'Policies and Legislation',
    'main' => file_get_contents('templates/policies-and-legislation/index.html'),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
