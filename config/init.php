<?php 
    $servername = "localhost";
    $username = "root";
    $password = "clever2021";
    $dbname = "twiksvideo";

    // Create connection

    $conn = 
    new mysqli(
        $servername, 
        $username,
        $password,
        $dbname
    );

    // CHeck connection

    if ($conn->connect_error) {
        die("Connection failed"
            . $conn->connect_error
        );
    } else;
?>