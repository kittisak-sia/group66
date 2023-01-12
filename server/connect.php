<?php
    $servername = "localhost";
    $username = "it65309010104";
    $password = "it12345";
    $dbname = "it65309010104";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>