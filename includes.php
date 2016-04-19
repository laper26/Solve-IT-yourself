<?php
$filepath = "/lib/config.php";
if(file_exists($filepath)) {
    require_once 'lib/config.php';
    require_once 'lib/db.php';
    $db = new db($config['dbhost'], $config['dbname'], $config['dbuser'], $config['dbpassword']);
} else {
    echo "The connection to the database could not be established because important files are missing. ";
}
//$result = $db->query('SELECT * FROM tree');
?>