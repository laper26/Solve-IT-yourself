<?php
require_once 'lib/config.php';
require_once 'lib/db.php';
$db = new db($config['dbhost'], $config['dbname'], $config['dbuser'], $config['dbpassword']);
//$result = $db->query('SELECT * FROM tree');
?>