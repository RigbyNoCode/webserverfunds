<!DOCTYPE html>
<html>
<head>
    <title>DB pull</title>
</head>
<body>


<?php
    $server = "localhost";
    $username = "bogdan";
    $password = "voidnul0";
    $database = "storage";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br>";

    
?>