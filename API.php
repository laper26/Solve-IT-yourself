<?php

$filepath = "lib/config.php";

if(file_exists($filepath)) {
    require_once $filepath;
    require_once 'lib/db.php';
    $db = new db($config['dbhost'], $config['dbname'], $config['dbuser'], $config['dbpassword']);
    $query = "SELECT soy_data FROM soy_table WHERE ID=1";
    $result = $db->fetch($db->query($query));
    
	echo $result['soy_data'];
	
} else {
    echo "The connection to the database could not be established because important files are missing. ";
    die();
}



