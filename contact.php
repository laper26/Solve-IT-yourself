<?php

require 'includes.php';

$pageDataArray = [
    'header' => parseTemplate('templates/header.html', []),
    'footer' => parseTemplate('templates/footer.html', []),
    'title' => 'Contact Us',
    'main' => parseTemplate('templates/contact/index.html', []),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
