<?php

require 'includes.php';

/*
 * We create an assoc pageDataArray to store the locations of the templates that we feed into the template engine.
 */
$pageDataArray = [
    'header' => file_get_contents('templates/header.html'),
    'footer' => file_get_contents('templates/footer.html'),
    'title' => 'Start',
    'main' => file_get_contents('templates/index/index.html'),
];

/*
 * The content variable parses the basic structure of every page - the base.html - which includes the
 * variables header, footer, title and main, which gets taken from the templates of $pageDataArray.
 * To display we content, we merely have to echo it.
 */
$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
