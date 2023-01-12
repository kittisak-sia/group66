<?php
<<<<<<< HEAD
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "group66";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
=======
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group66";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
  echo "<h1>Connection Fail</h1>" . mysqli_connect_error();
}
else{
    //echo "<h1>Connection Successful</h1>";
}
>>>>>>> df14c1e526cd7a5d8428fb62915f6f10e8eed963
?>