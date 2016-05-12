<?php

require 'includes.php';

$pageDataArray = [
    'title' => 'Contact Us',
    'main' => file_get_contents('templates/contact/index.html'),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
