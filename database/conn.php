<?php
    global $mysqli;
    
    $mysqli = new mysqli("localhost", "root", "", "skullcrusherz_db"); //(ip address, user, password, dbname)

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
?>
