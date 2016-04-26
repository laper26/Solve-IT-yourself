<?php

header('Content-Type: text/html; charset=utf-8');
$filepath = "lib/config.php";

if(file_exists($filepath)) {
    require_once $filepath;
    require_once 'lib/db.php';
    $db = new db($config['dbhost'], $config['dbname'], $config['dbuser'], $config['dbpassword']);
} else {
    echo "The connection to the database could not be established because important files are missing. ";
    die();
}

require_once 'lib/template.php';
