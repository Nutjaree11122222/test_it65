<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "php_65";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn,'utf8');
    date_default_timezone_set('Asia/Bangkok');
